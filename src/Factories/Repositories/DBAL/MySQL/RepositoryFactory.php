<?php

namespace App\Factories\Repositories\DBAL\MySQL;

use App\Factories\RepositoryFactory as BaseFactory;
use App\Repositories\DBAL\MySQL\UserRepository;

/**
 * Class RepositoryFactory
 *
 * @package App\Factories\Repositories\DBAL\MySQL
 */
class RepositoryFactory extends BaseFactory
{
    public function getUserRepository($connection)
    {
        return new UserRepository($connection);
    }
}