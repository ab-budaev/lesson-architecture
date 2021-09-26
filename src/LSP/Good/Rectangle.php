<?php

declare(strict_types=1);

namespace Budaev\LSP\Good;

class Rectangle
{
    private float $width;

    private float $height;

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
