<?php

declare(strict_types=1);

namespace Budaev\DIP\Good\Application;

use Budaev\Common\ProductEntity;
use Budaev\DIP\Good\infrastructure\DatabaseConnectorInterface;

class ProductRepository
{
    private DatabaseConnectorInterface $databaseConnector;

    public function __construct(DatabaseConnectorInterface $databaseConnector)
    {
        $this->databaseConnector = $databaseConnector;
    }

    public function findById(int $id): ProductEntity
    {
        return $this->databaseConnector->select();
    }
}
