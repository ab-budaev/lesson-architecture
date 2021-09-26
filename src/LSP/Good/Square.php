<?php

declare(strict_types=1);

namespace Budaev\LSP\Good;

class Square
{
    private float $size;

    public function setSize(float $size): void
    {
        $this->size = $size;
    }

    public function getArea(): float
    {
        return sqrt($this->size);
    }
}
