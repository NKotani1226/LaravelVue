<?php

namespace App\Http\Controllers\Api;

use App\Services\UserListService;
use App\Models\User;

class UserListController
{
    private $userListService;
    public function __construct(UserListService $userListService)
    {
        $this->userListService = $userListService;
    }

    public function getAllDate()
    {
        return  $this->userListService->getAllUsers();
    }
}
