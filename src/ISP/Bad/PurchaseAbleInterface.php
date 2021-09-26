<?php

declare(strict_types=1);

namespace Budaev\ISP\Bad;

interface PurchaseAbleInterface
{
    public function getPrice(): float;

    public function getDiscount(): float;

    public function getSize(): string;
}
