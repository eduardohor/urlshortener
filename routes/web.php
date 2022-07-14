<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten/store', [UserController::class, 'store'])->name('shorten.store');
Route::get('/shorten/create', [UrlController::class, 'create'])->name('shorten.create');
Route::get('/shorten', [UrlController::class, 'shorten'])->name('shorten.index');
Route::post('/shorten', [UrlController::class, 'shortening'])->name('shorten.shorten');

Route::put('/user/url/{id}/', [UserController::class, 'updateUrl'])->name('user.update.url');
Route::get('/user/url/{id}/edit', [UserController::class, 'editUrl'])->name('user.edit.urls');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::get('/user/url/{id}', [UserController::class, 'showUrl'])->name('user.show.urls');
Route::get('/user/urls', [UserController::class, 'listUrls'])->name('users.list.urls');


Route::delete('/admin/dashboard/user/{id}', [AdminController::class, 'destroyUser'])->name('user.destroy');
Route::get('/admin/dashboard/user/{id}/edit', [AdminController::class, 'editUser'])->name('user.edit');
Route::put('/admin/dashboard/user/{id}', [AdminController::class, 'updateUser'])->name('user.update');
Route::get('/admin/dashboard/user/{id}', [AdminController::class, 'showUser'])->name('user.show');
Route::get('/admin/dashboard/users', [AdminController::class, 'indexUsers'])->name('users.index');

Route::delete('/admin/dashboard/url/{id}', [AdminController::class, 'destroyUrl'])->name('url.destroy');
Route::get('/admin/dashboard/url/{id}/edit', [AdminController::class, 'editUrl'])->name('url.edit');
Route::put('/admin/dashboard/url/{id}', [AdminController::class, 'updateUrl'])->name('url.update');
Route::get('/admin/dashboard/url/{id}', [AdminController::class, 'showUrl'])->name('url.show');
Route::get('/admin/dashboard/urls', [AdminController::class, 'indexUrls'])->name('urls.index');