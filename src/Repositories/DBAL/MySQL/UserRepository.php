<?php

namespace App\Repositories\DBAL\MySQL;

use App\Entities\User;
use App\Repositories\Repository;
use App\Repositories\UserRepositoryInterface;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;

/**
 * Class UserRepository
 *
 * @package App\Repositories\DBAL\MySQL
 */
class UserRepository extends Repository implements UserRepositoryInterface
{
    /** @var Connection */
    protected $connection;

    public function create(User $user)
    {
        $userArray = $user->toArray();
        unset($userArray['id']);

        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->connection->createQueryBuilder();
        $query = $queryBuilder
            ->insert('Users')
            ->values(
                [
                    'firstName' => ':firstName',
                    'lastName'  => ':lastName',
                    'email'     => ':email',
                    'password'  => ':password'
                ]
            )
            ->setParameters($userArray);

        $query->execute();
    }

    public function findById($id)
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $query = $queryBuilder
            ->select('*')
            ->from('Users')
            ->where('id = :id')
            ->setParameter('id', $id);

        $statement = $query->execute();
        return new User($statement->fetch());
    }
}