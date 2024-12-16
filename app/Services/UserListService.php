<?php

namespace App\Services;

use App\Repositories\UserListRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserListService
{
    protected $userListRepository;

    public function __construct(UserListRepository $userListRepository)
    {
        $this->userListRepository = $userListRepository;
    }

    public function getAllUsers()
    {
        return $this->userListRepository->getAllUsers();
    }

    public function getPaginatedUsers(int $perPage = 10)
    {
        return $this->userListRepository->getPaginatedUsers($perPage);
    }

    public function getWhereName()
    {
        return $this->userListRepository->getWhereName();
    }

    public function getWhereBetWeen()
    {
        return $this->userListRepository->getWhereBetWeen();
    }

    public function getJoinPost()
    {
        return $this->userListRepository->getJoinPost();
    }
}
