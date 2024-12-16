<?php

namespace App\Services;

use App\Repositories\UserListRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserListService
{
    protected $userListRepository;

    /**
     * コンストラクタでリポジトリを注入
     *
     * @param UserListRepository $userListRepository
     */
    public function __construct(UserListRepository $userListRepository)
    {
        $this->userListRepository = $userListRepository;
    }

    /**
     * ユーザーの一覧を取得
     *
     * @return Collection
     */
    public function getAllUsers()
    {
        return $this->userListRepository->getAllUsers();
    }

    /**
     * ページネートされたユーザー一覧を取得
     *
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getPaginatedUsers(int $perPage = 10)
    {
        return $this->userListRepository->getPaginatedUsers($perPage);
    }
}
