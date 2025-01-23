<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/api/hello', name: 'api_hello')]
    public function index(): Response
    {
        return new Response('Symfony Responde a la llamada de React');
    }
}
