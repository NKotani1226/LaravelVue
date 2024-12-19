<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiData;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserListController;

Route::get('/apidata', [ApiData::class, 'getapidata']);
Route::get('/userlist/alldata', [UserListController::class, 'getAllDate']);

Route::resource('/user', UserController::class);