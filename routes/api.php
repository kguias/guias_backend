<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Models\User;

Route::get('/token-test', function () {
    $user = User::first();
    return $user->createToken('test')->plainTextToken;
});

Route::post('/login', [AuthController::class, 'login']);