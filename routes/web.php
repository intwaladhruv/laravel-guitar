<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuitarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/login', [AuthController::class, 'auth'])->name('login');
Route::get('/register', [AuthController::class, 'auth']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/test', function () {
    return 'abc';
});

Route::group(['middleware' => 'auth'], function() {
    Route::resource('guitars', GuitarController::class)->only([
        'index', 'store', 'edit', 'update', 'destroy'
    ]);;
});

