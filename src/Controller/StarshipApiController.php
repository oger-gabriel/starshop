<?php
namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarshipApiController extends AbstractController
{
    #[Route("/api/starships", methods: ["GET"])]
    public function getCollection(): Response
    {
        $starships = [
            new Starship("USS LeafyCruiser (Ncc-6001)", "Garden", "Jean-Luc Pickles", "taken over by Q"),
            new Starship("USS Espresso (NCC-1234-C)", "Latte", "James T. Quick!", "repaired"),
            new Starship("USS Wanderlust (NCC-2024-W)", "Delta Tourist", "Kathryn Journeyway", "under construction"),
        ];
        return $this->json($starships);
    }
}
