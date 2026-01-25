<?php
declare(strict_types=1);

namespace App\Domain;

use App\Domain\TaxStrategy;
use Exception;


class PercentageTax implements TaxStrategy
{
    private float $percentage;

    public function __construct(float $percentage)
    {
        if($percentage<=0){
            throw new Exception("el porcentaje de impuesto no puede ser menor a 0");
        }
        $this->percentage=$percentage;
    }
    public function apply(float $price): float
    {
        return $price+($price*($this->percentage/100));
    }
}