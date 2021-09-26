<?php

declare(strict_types=1);

namespace Budaev\DIP\Good\infrastructure;

interface DatabaseConnectorInterface
{
    public function select();
}
