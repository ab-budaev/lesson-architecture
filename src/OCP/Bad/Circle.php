<?php

declare(strict_types=1);

namespace Budaev\OCP\Bad;

class Circle
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
}
