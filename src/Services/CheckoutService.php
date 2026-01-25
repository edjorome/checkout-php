<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\DiscountStrategy;
use App\Domain\TaxStrategy;
use App\Services\PriceCalculator;
use App\Services\TaxCalculator;

class CheckoutService
{
    private PriceCalculator $priceCalculator;
    private TaxCalculator $taxCalculator;

    public function __construct (PriceCalculator $priceCalculator, TaxCalculator $taxCalculator)
    {
        $this->priceCalculator=$priceCalculator;
        $this->taxCalculator=$taxCalculator;
    }
    
    public function checkout(float $basePrice, DiscountStrategy $discount, TaxStrategy $tax): float
    {
        $priceAfterDiscount= $this->priceCalculator->calculate($basePrice,$discount);

        return $this->taxCalculator->calculate($priceAfterDiscount,$tax);
    }
}