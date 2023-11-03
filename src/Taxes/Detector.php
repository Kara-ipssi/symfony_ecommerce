<?php

namespace App\Taxes;

class Detector
{

    public function __construct(
        protected int $seuil
    ) {
    }
    public function detect(int $prix): bool
    {
        if ($prix > $this->seuil) {
            return true;
        }
        return false;
    }
}
