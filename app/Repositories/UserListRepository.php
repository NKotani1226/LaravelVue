<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserListRepository
{
    /**
     * ユーザーの一覧を取得
     *
     * @return Collection
     */
    public function getAllUsers()
    {
        return User::all(); // 全ユーザー取得
    }

    /**
     * ページネートされたユーザー一覧を取得
     *
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getPaginatedUsers(int $perPage = 10)
    {
        return User::paginate($perPage); // ページネート取得
    }

    public function getWhereName()
    {
        return User::where("name","Johnathon Schmidt")->get();
    }
}
