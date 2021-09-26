<?php

declare(strict_types=1);

namespace Budaev\ISP\Good;

interface HasPriceInterface
{
    public function getPrice(): float;
}
