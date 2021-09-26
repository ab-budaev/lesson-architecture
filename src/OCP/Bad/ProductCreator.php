<?php

declare(strict_types=1);

namespace Budaev\OCP\Bad;

use Budaev\Common\ProductDto;
use Budaev\Common\ProductEntity;

class ProductCreator
{
    private FileLogger $fileLogger;

    public function __construct(FileLogger $fileLogger)
    {
        $this->fileLogger = $fileLogger;
    }

    public function create(ProductDto $productDto): ProductEntity
    {
        // Some creation logic

        $this->fileLogger->log();
    }
}
