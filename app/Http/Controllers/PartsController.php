<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddFormRequest;

class PartsController extends Controller
{

    public function __construct()
    {}

    public function index()
    {
        return view("parts");
    }
}
