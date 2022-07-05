<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();
Route::get('/auth', [App\Http\Controllers\AuthController::class, 'index'])->name('auth');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

//Выход из аккаунта
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/news/{page}', [\App\Http\Controllers\ArticleController::class, 'page'])->name('page');

Route::get('/post', [\App\Http\Controllers\PostController::class, 'index']);
Route::post('/post/publish', [\App\Http\Controllers\PostController::class, 'store']);

Route::get('/post/comment/{id}', [\App\Http\Controllers\CommentController::class, 'create']);
Route::post('/post/comment/store', [\App\Http\Controllers\CommentController::class, 'store']);

Auth::routes();
//Лента новостей
Route::get('', [HomeController::class, 'index']);

Route::get('/news/delete/{page}', [\App\Http\Controllers\ArticleDeleteController::class, 'page'])->name('page');
