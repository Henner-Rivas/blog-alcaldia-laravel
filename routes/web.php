<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\FrontController;
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


Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('pages.index');
    Route::get('/posts/{post}', 'show_articulo')->name('posts.show');
    Route::get('/searches', 'search')->name('posts.search');
    Route::get('/etiquetas/{tag}', 'tag')->name('posts.tag');

    Route::get('/tramites-y-servicios', 'tramites')->name('pages.tramites-y-servicios');
    Route::get('/transparencia', 'transparencia')->name('pages.transparencia');
    Route::get('/documentos', 'documents')->name('pages.documents');
    Route::get('/nuestros-planes', 'planes')->name('pages.nuestros-planes');
    Route::get('/nuestros-planes/{post}', 'show_planes')->name('pages.show-planes');
    Route::get('/nuestros-planes/{post}', 'show_planes')->name('pages.show-planes');
    Route::get('/comment/{post}', 'storeComment')->name('comments.show');
    Route::get('/programas', 'programas')->name('pages.programas');
    Route::get('/programas/{post}', 'show_programa')->name('pages.show-programa');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});
