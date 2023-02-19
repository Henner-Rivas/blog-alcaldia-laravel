<?php

use App\Http\Controllers\Admin\ArchivoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlanesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->middleware('can:admin.index')->name('admin.index');
});

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy'])->names('admin.users');

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');

Route::resource('posts', PostController::class)->names('admin.posts');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('sliders', SliderController::class)->names('admin.sliders');

Route::resource('planes', PlanesController::class)->names('admin.planes');

Route::resource('archivos', ArchivoController::class)->names('admin.archivos');
