<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

//use App\Product;
//use App\User;
//$product = new Product(1, "Laptop", 1000);
//$user = new User(1,"correo@ejemplo.com");
//echo $product->applyDiscount(10);
//echo $user->getEmail();


//use App\Domain\PercentageDiscount;
//use App\Domain\FixedDiscount;
//$price = 1000;
//$percentageDiscount = new PercentageDiscount(10);
//echo $percentageDiscount->apply($price) . PHP_EOL;
//$fixedDiscount = new FixedDiscount(200);
//echo $fixedDiscount->apply($price);

//use App\Domain\PercentageDiscount;
//use App\Services\PriceCalculator;
//$discount = new PercentageDiscount(10);
//$calculator = new PriceCalculator();
//echo $calculator->calculate(1000, $discount);


//use App\Domain\BankAccount;
//$account = new BankAccount('ACC-001', 0);
//$account->deposit(500);
//$account->withdraw(50);
//echo $account->getBalance(); PHP_EOL;
//echo $account->getAcc();

//$tax = new PercentageTax(21);
//$calculator = new TaxCalculator();
//echo $calculator->calculate(1000, $tax); // 1210
//$tax = new FixedTax(50);
//echo $calculator->calculate(1000, $tax); // 105

use App\Domain\PercentageTax;
use App\Domain\PercentageDiscount;
use App\Services\TaxCalculator;
use App\Services\CheckoutService;
use App\Services\PriceCalculator;
use App\Domain\Product;

$product = new Product(1, "Laptop", 1200);
$checkout = new CheckoutService(
    new PriceCalculator(),
    new TaxCalculator()
);

echo $checkout->checkout(
   $product->getPrice(),
    new PercentageDiscount(10),
    new PercentageTax(16)
);
