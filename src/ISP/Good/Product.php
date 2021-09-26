<?php

declare(strict_types=1);

namespace Budaev\ISP\Good;

class Product implements HasPriceInterface, HasDiscountInterface, HasSizeInterface
{
    public function getDiscount(): float
    {
        // TODO: Implement getDiscount() method.
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
    }

    public function getSize(): string
    {
        // TODO: Implement getSize() method.
    }
}
