<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CurrenciesController;
use App\Service\Currency\CurrencyService;

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

Route::get('/currencies', [CurrenciesController::class, 'list'])->name('list')->middleware('guest');

Route::post('/users', [UsersController::class, 'store']);

Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth');

Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware('guest');

Route::get('/currency/{id}', [CurrenciesController::class, 'getCurrency'])->name('currency')->middleware('guest');

Route::post('/users/authenticate', [UsersController::class, 'authenticate']);

Route::get('/api-currencies', [CurrencyService::class, 'getCurrenciesData'])->name('getCurrenciesData')->middleware('guest');

Route::post('/save-order', [CurrenciesController::class, 'savePurchase'])->name('savePurchase')->middleware('guest');

