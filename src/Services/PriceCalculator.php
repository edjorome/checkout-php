<?php
declare(strict_types=1);

namespace App\Services;
use App\Domain\DiscountStrategy;

class PriceCalculator
{

public function calculate(float $price, DiscountStrategy $discount): float
{
        return $discount->apply($price);
}

}