<?php

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
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    // return view('welcome');
    return view('user.app');
});
// user register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'storeUser']);

// user login
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// user dashboard
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

// admin dasgboard
Route::get('admin-dashboard', [AdminController::class, 'adminDashboard'])->name('admin-dashboard');
Route::get('user-list', [AdminController::class, 'userList'])->name('user-list');
