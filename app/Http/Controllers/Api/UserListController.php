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

    public function getPagenate()
    {
        return  $this->userListService->getPaginatedUsers();
    }

    public function getWhere()
    {
        return $this->userListService->getWhereName();
    }

    public function getWhereBetween()
    {
        return $this->userListService->getWhereBetWeen();
    }

    public function getJoin()
    {
        return $this->userListService->getJoinPost();
    }
    
}
