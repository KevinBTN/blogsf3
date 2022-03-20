<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;


class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default',  methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
}