<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route("/welcome/{name}", name: "WelcomeRoute", methods: "get")]
    public function welcome(string $name)
    {
        return $this->render('Hello/welcome.html.twig', ['name' => $name]);
        //return new Response("Welcome to the world of Symfony {$name}");  
    }
    
    #[Route("/aboutus", name: 'about')]
    public function about(LoggerInterface $logger)
    {
        $logger->info("We have accessed the about us page.");
        return $this->render("Hello/about.html.twig");
    }

    #[Route("/multiplynumbers/{a<\d+>}/{b<\d+>}", name: "multiply")]
    public function multiply( $a, $b)
    {
        $result = $a * $b;
        return $this->render("Hello/multiply.html.twig", ['result' => $result]);
    }

}





