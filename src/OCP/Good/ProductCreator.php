<?php

declare(strict_types=1);

namespace Budaev\OCP\Good;

use Budaev\Common\ProductEntity;

class ProductCreator
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function create(): ProductEntity
    {
        // Some product creation logic

        $this->logger->log();
    }
}
