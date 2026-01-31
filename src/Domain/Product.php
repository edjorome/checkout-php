<?php
declare(strict_types=1);

namespace App\Domain;

use Exception;



class Product
{
    private float $price;
    private int $id;
    private string $name;

public function __construct(int $id, string $name, float $price)
{
    $this->id=$id;
    $this->name=$name;
    $this->price=$price;
}
public function getPrice():float
{
    return $this->price;

}

}