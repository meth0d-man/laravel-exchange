<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::get('/register', [UsersController::class, 'create'])->middleware('guest');

Route::post('/users', [UsersController::class, 'store']);

Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth');

Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UsersController::class, 'authenticate']);
