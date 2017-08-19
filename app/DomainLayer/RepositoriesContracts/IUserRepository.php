<?php

namespace App\DomainLayer\RepositoriesContracts;

interface IUserRepository
{
    function authUsernameAttempt($username=null, $password=null);
}