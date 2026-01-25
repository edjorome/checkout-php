<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\TaxStrategy;

class TaxCalculator
{
    public function calculate(float $price, TaxStrategy $tax): float
    {
        return $tax->apply($price);
    }
}
