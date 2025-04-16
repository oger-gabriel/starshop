<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StarshipRepository;

#[Route("/api/starships")]
class StarshipApiController extends AbstractController
{
    #[Route(methods: ["GET"])]
    public function getCollection(StarshipRepository $repository): Response
    {
        $starships = $$repository->findAll();
        return $this->json($starships);
    }
    /**
     * @param mixed $id
     */
    #[Route("/{id<\d+>}", methods: ["GET"])]
    public function get($id, StarshipRepository $repository): Response
    {
        $starship = $repository->find($id);

        if (!$starship) {
            throw $this->createNotFoundException("Vaisseau non trouvé");
        }

        return $this->json($starship);
    }
}
