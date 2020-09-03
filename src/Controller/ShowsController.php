<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowsController extends AbstractController
{
    /**
     * @Route("/spectacles", name="shows")
     */
    public function index()
    {
        return $this->render('shows/index.html.twig', [
            'title' => 'Spectacles',
            'controller_name' => 'ShowsController',
        ]);
    }
}
