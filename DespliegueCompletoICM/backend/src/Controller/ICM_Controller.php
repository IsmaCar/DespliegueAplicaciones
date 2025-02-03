<?php

namespace App\Controller;

use App\Entity\TablaICM;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ICM_Controller extends AbstractController
{

    private EntityManagerInterface $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/api/db', name: 'get_db')]
    public function index(): JsonResponse
    {
        $repository = $this->entityManager->getRepository(TablaICM::class);
        $dato = $repository->findOneBy([]);

        // Si no hay mensaje en la BD, devolver un mensaje de error
        if (!$dato) {

            return $this->json(['message' => 'No se encontraron registros en la base de datos.']);

        } else {
            $result = 'Backend Operativo, respuesta de la BD: ' . $dato->getFraseICM();
            return $this->json(['message' => $result]);
        }
    }
}
?>
