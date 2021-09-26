<?php

declare(strict_types=1);

namespace Budaev\LSP\Bad;

class Square extends Rectangle
{
    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }
}
