<?php

declare(strict_types=1);

namespace Budaev\SRP\Good;

use Budaev\Common\ProductEntity;

class ProductViewModel
{
    public function transform(ProductEntity $productEntity): array
    {
        // Some transformation logic
    }
}
