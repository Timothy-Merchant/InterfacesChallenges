<?php

declare(strict_types=1);

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $length;

    public function __construct(float $length)
    {
        $this->length = $length;
    }

    public function area(): float
    {
        return $this->length ** 2;
    }
}
