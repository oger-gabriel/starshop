<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger) {}

    /**
     * @return array<int,Starship>
     */
    public function findAll(): array
    {
        $this->logger->info("collection de vaisseaux spatiaux récupérée");
        return [
            new Starship("USS LeafyCruiser (Ncc-6001)", "Garden", "Jean-Luc Pickles", "taken over by Q"),
            new Starship("USS Espresso (NCC-1234-C)", "Latte", "James T. Quick!", "repaired"),
            new Starship("USS Wanderlust (NCC-2024-W)", "Delta Tourist", "Kathryn Journeyway", "under construction"),
        ];
    }
}
