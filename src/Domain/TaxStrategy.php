<?php
declare(strict_types=1);

namespace App\Domain;

interface TaxStrategy
{
    public function apply(float $price): float;
}
