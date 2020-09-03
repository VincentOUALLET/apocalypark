<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="noPath")
     */
    public function indexNoPath()
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Accueil ',
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/accueil", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Accueil',
            'controller_name' => 'HomeController',
        ]);
    }
}
