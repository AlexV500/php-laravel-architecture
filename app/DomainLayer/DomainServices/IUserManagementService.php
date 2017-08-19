<?php

namespace App\DomainLayer\DomainServices;

use App\DomainLayer\DomainEntities\UserEntity;

interface IUserManagementService
{
    function authUsernameAttemp(UserEntity $credentials);
}