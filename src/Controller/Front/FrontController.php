<?php

namespace App\Controller\Front;

use App\Repository\BouleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="app_front")
     */
    public function index(BouleRepository $bouleRepository): Response
    {

        
        return $this->render('front/index.html.twig', [
            'boules' => $bouleRepository->findAll(),
        ]);
    }
}
