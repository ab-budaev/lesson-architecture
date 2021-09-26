<?php

declare(strict_types=1);

namespace Budaev\OCP\Good;

class Rectangle implements AreaInterface
{
    private float $width;

    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
