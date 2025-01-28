<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Attribute\Route as AttributeRoute;

class HelloController
{
    #[Route("/welcome/{name}", name: "WelcomeRoute", methods: "get")]
    public function welcome(string $name)
    {
        return new Response("Welcome to the world of Symfony {$name}");  
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





