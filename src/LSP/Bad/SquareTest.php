<?php

declare(strict_types=1);

namespace Budaev\LSP\Bad;

class SquareTest extends RectangleTest
{
    protected function initRectangle(): Square
    {
        return new Square();
    }
}
