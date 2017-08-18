<?php

namespace App\Http\Controllers\DistributedServices;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\DomainLayer\DomainEntities\UserEntity;
use App\DomainLayer\DomainServices\IUserManagementService;

class UserApiController extends Controller
{
    /**
     * @var IUserManagementService
     */
    protected $userManagementService;
     
    public function __construct(IUserManagementService $userManagementService)
    {
        $this->userManagementService = $userManagementService;
    }

    // POST
    // URI: api/users/login
    /**
     * 
     * @param Request $request
     * 
     */
    public function login(Request $request)
    {
        $credentialsDto = $request->only([
            'username',
            'password'
        ]);

        $dtoState = $this->validatorCredentialsDto($credentialsDto);

        if($dtoState->fails()) {
            return response('Bad Request', 400);
        }

        $userEntity = new UserEntity($credentialsDto);
        $userLogged = $this->userManagementService->authUsernameAttemp($userEntity);

        dd($userLogged);
    }

    private function validatorCredentialsDto($credentialsDto)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        $messages = [];

        return Validator::make($credentialsDto, $rules, $messages);
    }
}
