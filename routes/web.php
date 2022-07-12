<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UserController;
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

Route::get('/shorten', [UrlController::class, 'index'])->name('shorten.index');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/admin/users', [UserController::class, 'index'])->name('index.users');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('show.user');

Route::get('/admin/urls', [UserController::class, 'indexUrls'])->name('index.urls');