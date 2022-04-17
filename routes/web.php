<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\TagController;

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SearchController;
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

//fornt route web
Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('/article/{slug}', [PostsController::class, 'show'])->name('showPost');
Route::get('/category/{slug}', [CategoriesController::class, 'show'])->name('showPostCategory');
Route::get('/tag/{slug}', [TagsController::class, 'show'])->name('showPostTag');
Route::get('/search', [SearchController::class, 'search'])->name('search');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', [MainController::class, 'index'])-> name('admin.index');

});
Route::resource('/admin/categories', CategoryController::class);
Route::resource('/admin/tag', TagController::class);
Route::resource('/admin/post', PostController::class);
Route::resource('/admin/mail', MailController::class);

//users

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');

    //ftp_login

    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});


Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/email', [EmailController::class, 'store'])->name('email.store');






