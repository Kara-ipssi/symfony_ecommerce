<?php

namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator
{

    public function  __construct(
        protected LoggerInterface $logger
    ) {
    }
    public function calcul(float $prix): float
    {
        $this->logger->info("Un calcul à eu lieu $prix");
        return $prix * (20 / 100);
    }
}
