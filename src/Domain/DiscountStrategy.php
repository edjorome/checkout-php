<?php
declare(strict_types=1);

namespace App\Domain;

interface DiscountStrategy
{
    public function apply(float $price):float;
}