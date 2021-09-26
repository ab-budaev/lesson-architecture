<?php

declare(strict_types=1);

namespace Budaev\SRP\Bad\ProductManager;

use Budaev\Common\ProductDto;
use Budaev\Common\ProductEntity;

class ProductManager
{
    public function createProduct(ProductDto $productDto): ProductEntity
    {
        // Some creation logic
    }

    public function transformProductForResponse(ProductEntity $productEntity): array
    {
        // Some transformation logic
    }

    public function findProduct(int $productId): ProductEntity
    {
        // Some DB fetching logic
    }
}
