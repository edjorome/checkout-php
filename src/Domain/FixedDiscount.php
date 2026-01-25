<?php
declare(strict_types=1);

namespace App\Domain;

use Exception;

class FixedDiscount implements DiscountStrategy
{
    private float $amount;

    public function __construct(float $amount)
    {
           if($amount<0){
        throw new Exception("el monto no puede ser negativo");
    }
    $this->amount = $amount;
    }

    public function apply(float $price): float
    {
        return $price - $this->amount;
    }
}