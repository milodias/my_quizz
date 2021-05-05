<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Categorie;

class HomeIndexController extends AbstractController {
    /**
     * @Route ("/", name= "index")
     */
    function index(): Response {
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        dump($categories);
        return $this->render('pages/home.html.twig', ['categories' => $categories]);
    }
}