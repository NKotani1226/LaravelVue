<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserListRepository
{

    public function getAllUsers()
    {
        return User::all(); // 全ユーザー取得
    }

    public function getPaginatedUsers(int $perPage = 10)
    {
        return User::paginate($perPage); // ページネート取得
    }

    public function getWhereName()
    {
        return User::where("name","Johnathon Schmidt")->get();
    }

    public function getWhereBetWeen()
    {
        return User::whereBetween('id', [3, 5])->get();
    }

    
}
