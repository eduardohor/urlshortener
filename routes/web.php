<?php

use App\Http\Controllers\ShortenerController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/shorten', [ShortenerController::class, 'index'])->name('shorten.index');
    Route::post('/shorten', [ShortenerController::class, 'shortening'])->name('shorten.shorten');

    Route::get('/url/create', [UrlController::class, 'create'])->name('url.create');
    Route::post('/url/create', [UrlController::class, 'store'])->name('url.store');
    Route::delete('/url/{id}', [UrlController::class, 'destroy'])->name('destroy.url');
    Route::put('/url/{id}/', [UrlController::class, 'update'])->name('update.url');
    Route::get('/url/{id}/edit', [UrlController::class, 'edit'])->name('edit.url');
    Route::get('/url/{id}', [UrlController::class, 'show'])->name('url.show');
    Route::get('/urls', [UrlController::class, 'index'])->name('index.urls');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::delete('/admin/dashboard/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/admin/dashboard/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/admin/dashboard/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/admin/dashboard/user/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/admin/dashboard/users', [UserController::class, 'index'])->name('users.index');

    Route::delete('/admin/dashboard/url/{id}', [UrlController::class, 'destroyByAdmin'])->name('url.destroy.admin');
    Route::get('/admin/dashboard/url/{id}/edit', [UrlController::class, 'editByAdmin'])->name('url.edit.admin');
    Route::put('/admin/dashboard/url/{id}', [UrlController::class, 'updateByAdmin'])->name('url.update.admin');
    Route::get('/admin/dashboard/url/{id}', [UrlController::class, 'showByAdmin'])->name('url.show.admin');
    Route::get('/admin/dashboard/urls', [UrlController::class, 'indexByAdmin'])->name('urls.index.admin');
});