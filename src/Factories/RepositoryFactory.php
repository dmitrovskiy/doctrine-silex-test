<?php

namespace App\Factories;

use App\Repositories\UserRepositoryInterface;

/**
 * Class RepositoryFactory
 *
 * @package App\Factories
 */
abstract class RepositoryFactory
{
    /**
     * @param $connection
     *
     * @return UserRepositoryInterface
     */
    abstract public function getUserRepository($connection);
}