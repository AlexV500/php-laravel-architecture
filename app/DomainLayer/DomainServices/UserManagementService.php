<?php

namespace App\DomainLayer\DomainServices;

use App\DomainLayer\DomainEntities\UserEntity;
use App\DomainLayer\RepositoriesContracts\IUserRepository;

class UserManagementService implements IUserManagementService
{
    /**
     * @var IUserRepository
     */
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $credentials
     *
     * @throws \InvalidArgumentException
     * @return mixed|null
     */
    public function authUsernameAttemp(UserEntity $credentials)
    {
        if($credentials->getUsername() === null || $credentials->getUsername() == '') {
            throw new \InvalidArgumentException("username cannot be null");
        }

        if($credentials->getPassword() === null || $credentials->getPassword() == '') {
            throw new \InvalidArgumentException("password cannot be null");
        }

        return $this->userRepository->authUsernameAttempt($credentials->getUsername(), $credentials->getPassword());
    }
}