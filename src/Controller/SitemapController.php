<?php

namespace App\Controller;

use App\Entity\Attraction;
use App\Entity\Reservation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SitemapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(Request $request)
    {
        // In order to catch the hostname
        $hostname = $request->getSchemeAndHttpHost();
        // dd($hostname);

        // Initialize an array to list URLs
        $urls = array(); // or array();

        // Inside, we add static URLs
        $urls[] = ['loc' => $this->generateUrl('home')];
        $urls[] = ['loc' => $this->generateUrl('app_login')];
        $urls[] = ['loc' => $this->generateUrl('app_register')];
        $urls[] = ['loc' => $this->generateUrl('attraction_index')];
        // Routes which have to stay private, you don't want these ones in your xml
        // $urls[] = ['loc' => $this->generateUrl('reservation_index')];
        
        
        // dd($urls);

        // Now we add dynamic URLs
        foreach($this->getDoctrine()->getRepository(Attraction::class)->findAll() as $attraction) {
            $images = [
                'loc' => '/uploads/attraction/'. $attraction->getFeaturedImage(),
                'title' => $attraction->getTitle(),
                // 'description' => $attraction->getDescription(),
            ];

            $urls[] = [
                'loc' => $this->generateUrl('attraction_show', [
                    'id' => $attraction->getId(),
                ]),
                'image' => $images,
                'lastmod' => $attraction->getUpdatedAt()->format('Y-m-d')
            ];
        }

        // Routes which have to stay private, you don't want these ones in your xml
        // foreach($this->getDoctrine()->getRepository(Reservation::class)->findAll() as $reservation) {
        //     $urls[] = [
        //         'loc' => $this->generateUrl('reservation_show', [
        //             'id' => $reservation->getId(),
        //         ]),
        //         'image' => $images,
        //         'lastmod' => $reservation->getReservationDate()->format('Y-m-d')
        //     ];
        // }

        // dd($urls);

        // We build the response
        $response = new Response(
            $this->renderView('sitemap/index.html.twig', [
                    'urls' => $urls,
                    'hostname' => $hostname,
            ]), // check function compact : compact('urls', 'hostname')
            200,
        );
        // We add the HTTP headers (we could have done it in the creation of the response, that's another way)
        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }
}
