<?php

namespace App\Controller;

use Twig\Environment;
use Cocur\Slugify\Slugify;
use App\Services\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{

    #[Route(path: "/hello/{prenom}", name: "hello")]
    public function hello(LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig, $prenom = "World")
    {
        dump($twig);
        dump($slugify->slugify("Hello World"));
        $logger->error("This is my error");
        $tva = $calculator->calcul(100);
        dump($tva);
        return new Response("Hello $prenom ");
    }
}
