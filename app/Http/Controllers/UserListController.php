<?php

namespace App\Http\Controllers;

class UserListController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return view("userlist");
    }
}
