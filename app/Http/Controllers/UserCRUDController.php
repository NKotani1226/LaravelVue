<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCRUDController extends Controller
{
    public function index()
    {
        return view("usercrud");
    }
}
