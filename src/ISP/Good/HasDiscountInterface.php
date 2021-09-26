<?php

declare(strict_types=1);

namespace Budaev\ISP\Good;

interface HasDiscountInterface
{
    public function getDiscount(): float;
}
