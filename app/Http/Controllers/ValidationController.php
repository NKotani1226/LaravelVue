<?php

namespace App\Http\Controllers;

class ValidationController extends Controller
{

    public function __construct()
    {}

    public function index()
    {
        return view("validation");
    }
}
