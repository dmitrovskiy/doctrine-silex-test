<?php

namespace App\Repositories;

use App\Entities\User;

/**
 * Interface UserRepositoryInterface
 *
 * @package App\Repositories
 */
interface UserRepositoryInterface
{
    /**
     * @param User $user
     *
     * @return void
     */
    function create(User $user);

    /**
     * @param $id
     *
     * @return User
     */
    function findById($id);
}