<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendudukController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;


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

Route::resource('penduduk', pendudukController::class);


Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function () {
       Route::resource('editor', EditorController::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');