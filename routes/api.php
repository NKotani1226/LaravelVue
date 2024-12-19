<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiData;
use App\Http\Controllers\Api\UserController;

Route::get('/apidata', [ApiData::class, 'getapidata']);

Route::resource('/user', UserController::class);