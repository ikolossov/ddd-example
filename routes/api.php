<?php

use App\Presentation\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World';
});


Route::get('/user/{id}', [UserController::class, 'get']);
Route::post('/user', [UserController::class, 'create']);