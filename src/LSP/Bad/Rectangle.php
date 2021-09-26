<?php

declare(strict_types=1);

namespace Budaev\LSP\Bad;

class Rectangle
{
    protected float $width;

    protected float $height;

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
