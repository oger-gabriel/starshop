<?php

namespace App\Controller;

useuseSymfony\Component\HttpFoundation\Response;
Symfony\Component\Routing\Attribute\Route;
class MainController
{
    #[Route]
    public function HomePage(): Response
    {
        return new Response('<strong>Hello World !</strong>');
    }
}
