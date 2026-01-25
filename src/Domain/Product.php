<?php
declare(strict_types=1);

namespace App\Domain;

use Exception;

class Product
{

private int $id;
private string $name;
private float $price;

public function __construct(int $id, string $name, float $price)
{
    if ($price < 0) {
        throw new Exception ("el precio no puede ser negativo");
    }
    $this->id=$id;
    $this->name=$name;
    $this->price=$price;
}
public function getPrice():float
{
    return $this->price;

}

}