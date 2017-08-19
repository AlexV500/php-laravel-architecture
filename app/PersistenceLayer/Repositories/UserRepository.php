<?php

namespace App\PersistenceLayer\Repositories;

use App\DomainLayer\RepositoriesContracts\IUserRepository;
use App\User;

class UserRepository implements IUserRepository
{
    /**
     * @throws \Exception
     */
    public function authUsernameAttempt($username=null, $password=null)
    {
        throw new \Exception("Not Implemented Exception");
    }
}