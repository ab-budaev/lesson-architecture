<?php

declare(strict_types=1);

namespace Budaev\DIP\Bad\Application;

use Budaev\Common\ProductEntity;
use Budaev\DIP\Bad\Infrastructure\MySqlDatabaseConnector;

class ProductRepository
{
    private MySqlDatabaseConnector $mySqlDatabaseConnector;

    public function __construct(MySqlDatabaseConnector $mySqlDatabaseConnector)
    {
        $this->mySqlDatabaseConnector = $mySqlDatabaseConnector;
    }

    public function findById(int $id): ProductEntity
    {
        return $this->mySqlDatabaseConnector->select();
    }
}
