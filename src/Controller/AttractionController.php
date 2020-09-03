<?php

namespace App\Controller;

use App\Entity\Attraction;
use App\Form\AttractionType;
use App\Repository\AttractionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/attraction")
 */
class AttractionController extends AbstractController
{
    /**
     * 
     * @Route("/", name="attraction_index", methods={"GET"})
     */
    public function index(AttractionRepository $attractionRepository): Response
    {
        return $this->render('attraction/index.html.twig', [
            'attractions' => $attractionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="attraction_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted("ROLE_ADMIN");
        $attraction = new Attraction();
        $form = $this->createForm(AttractionType::class, $attraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // set fields which are not visible in the form
            $featured_image = 'Image du film ' . $attraction->getTitle();
            $attraction->setFeaturedImage($featured_image);
            $attraction->setCreatedAt(new \DateTime('now'));
            $attraction->setCreatedBy($this->getUser()->getUsername());

            // set image file to upload
            $imageFile = $form->get('attraction_image')->getData();
            // dd($imageFile);

            if($imageFile) {
                $newFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                // $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $newFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where attractions are stored
                try {
                    $imageFile->move(
                        $this->getParameter('attraction_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'imageFilename' property to store the image file name
                // instead of its contents
                $attraction->setFeaturedImage($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($attraction);
            $entityManager->flush();

            return $this->redirectToRoute('attraction_index');
        }

        return $this->render('attraction/new.html.twig', [
            'attraction' => $attraction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="attraction_show", methods={"GET"})
     */
    public function show(Attraction $attraction): Response
    {
        return $this->render('attraction/show.html.twig', [
            'attraction' => $attraction,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="attraction_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Attraction $attraction): Response
    {
        $form = $this->createForm(AttractionType::class, $attraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('attraction_index');
        }

        return $this->render('attraction/edit.html.twig', [
            'attraction' => $attraction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="attraction_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Attraction $attraction): Response
    {
        if ($this->isCsrfTokenValid('delete'.$attraction->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($attraction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('attraction_index');
    }
}
