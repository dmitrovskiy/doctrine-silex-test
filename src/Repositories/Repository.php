<?php

namespace App\Repositories;

/**
 * Class Repository
 *
 * @package App\Repositories
 */
abstract class Repository
{
    /** @var mixed */
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
}