<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shorten', [UrlController::class, 'shorten'])->name('shorten.index');

Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::delete('/admin/dashboard/user/{id}', [AdminController::class, 'destroyUser'])->name('user.destroy');
Route::get('/admin/dashboard/user/{id}/edit', [AdminController::class, 'editUser'])->name('user.edit');
Route::put('/admin/dashboard/user/{id}', [AdminController::class], 'updateUser')->name('user.update');
Route::get('/admin/dashboard/user/{id}', [AdminController::class, 'showUser'])->name('user.show');
Route::get('/admin/dashboard/users', [AdminController::class, 'indexUsers'])->name('users.index');

Route::get('/admin/dashboard/urls', [AdminController::class, 'indexUrls'])->name('urls.index');