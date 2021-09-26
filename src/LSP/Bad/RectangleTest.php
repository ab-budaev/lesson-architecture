<?php

declare(strict_types=1);

namespace Budaev\LSP\Bad;

class RectangleTest
{
    public function testCalculateAreaForRectangle(): void
    {
        $rectangle = $this->initRectangle();
        $rectangle->setWidth(5);
        $rectangle->setHeight(7);

        $area = $rectangle->getArea();

        static::assertEquals(35, $area);
    }

    protected function initRectangle(): Rectangle
    {
        return new Rectangle();
    }
}
