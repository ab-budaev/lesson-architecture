<?php

declare(strict_types=1);

namespace Budaev\SRP\Good;

use Budaev\Common\ProductEntity;

class ProductRepository
{
    public function findProductById(int $productId): ProductEntity
    {
        // Some logic to find product
    }
}
