<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route("/welcome/{name}", name: "WelcomeRoute", methods: "get")]
    public function welcome(string $name)
    {
        return $this->render('Hello/Welcome.html.twig', ['name' => $name]);
        //return new Response("Welcome to the world of Symfony {$name}");  
    }
    
    #[Route("/about")]
    public function about()
    {
        return new Response("This is about Symfony");
    }

    #[Route("/multiply/{a<\d+>}/{b<\d+>}")]
    public function multiply( $a, $b)
    {
        $result = $a * $b;
        return new Response("The result is {$result}");
    }

}





