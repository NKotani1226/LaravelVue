<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddFormRequest;

class ValidationController extends Controller
{

    public function __construct()
    {}

    public function index()
    {
        return view("validation");
    }

    public function store(UserAddFormRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('validation.index')->with('success', 'ユーザーを作成しました！');
    }
}
