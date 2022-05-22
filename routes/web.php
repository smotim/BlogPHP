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
// TODO создать роут для новостной ленты и закрепить его на пустую строку. авторизации сделать auth
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/news/{page}', [\App\Http\Controllers\ArticleController::class, 'page'])->name('page');

Route::get('/post', [\App\Http\Controllers\PostController::class, 'index']);
Route::post('/post/publish', [\App\Http\Controllers\PostController::class, 'store']);


Auth::routes();

//Route::get('/', function() {
//    return view('roles/index');
//});
Route::get('', [HomeController::class, 'index']);
