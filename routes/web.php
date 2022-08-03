<?php

use App\Http\Controllers\ConnectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [ConnectController::class, 'getLogin'])->name('login');
Route::get('/register', [ConnectController::class, 'getRegister'])->name('register');
Route::post('/register', [ConnectController::class, 'postRegister'])->name('register');
