<?php

declare(strict_types=1);

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pow($this->radius, 2) * pi();
    }
}
