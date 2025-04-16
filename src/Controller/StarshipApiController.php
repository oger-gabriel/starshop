<?php
namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StarshipRepository;

class StarshipApiController extends AbstractController
{
    #[Route("/api/starships", methods: ["GET"])]
    public function getCollection(StarshipRepository $repository): Response
    {
        $starships = $$repository->findAll();
        return $this->json($starships);
    }
}
