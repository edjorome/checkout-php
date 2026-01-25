<?php
declare(strict_types=1);

namespace App\Domain;

use Exception;
use App\Domain\InvalidDiscountException;

Class PercentageDiscount implements DiscountStrategy
{
    private float $percent;
    
    public function __construct(float $percent)
    {
        if ($percent<0){
            throw new InvalidDiscountException("el porcentaje no puede ser negativo");
        }
        $this->percent=$percent;
    }
    public function apply(float $price): float
    {
        return $price - ($price*($this->percent/100));
    }
}