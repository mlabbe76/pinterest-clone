<?php

namespace App\Controller;

use App\Repository\PinRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PinsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(PinRepository $repo): Response
    {
        return $this->render('pins/index.html.twig', ['pins' => $repo->findAll()]); /*['message'=>'bonjour mickael']);*/
        
        /*
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PinsController.php',
        ]);*/
    }
}
