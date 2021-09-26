<?php

declare(strict_types=1);

namespace Budaev\OCP\Good;

class Circle implements AreaInterface
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return sqrt($this->radius) * M_PI;
    }
}
