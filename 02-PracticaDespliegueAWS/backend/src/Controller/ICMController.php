<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ICMController
{
#[Route('/api/ini', name: 'api_ini')]
public function index(): Response
{
return new Response('Symfony de Nombre Completo Responde a la llamada de
React');
}
}