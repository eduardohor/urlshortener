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

Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/admin/user/{id}', [UserController::class], 'update')->name('user.update');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');

Route::get('/admin/urls', [UserController::class, 'indexUrls'])->name('index.urls');