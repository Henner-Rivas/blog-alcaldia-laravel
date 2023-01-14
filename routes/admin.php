<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('admin.index');
});

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy'])->names('admin.users');
