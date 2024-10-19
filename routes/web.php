<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\TestController;

/*
 * Routes for the Public Pages
 */
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contact-post');

Route::get('/articles', [ArticlesController::class, 'index'])->name('article.index');
//Route::get('/articles/tag/{tagID}', [ArticlesController::class, 'articleListByTag'])->name('articles-by-tag');
//Route::get('/articles/category/{categoryID}', [ArticlesController::class, 'articleListByCategory'])->name('articles-by-category');
//Route::get('/articles/author/{authorID}', [ArticlesController::class, 'articleListByAuthor'])->name('articles-by-author');
//Route::get('/articles/date/{date}', [ArticlesController::class, 'articleListByDate'])->name('articles-by-date');
Route::get('/article/{article}', [ArticlesController::class, 'show'])->name('article.show');

Route::get('/test', [TestController::class, 'test'])->name('test');


/*
 * Routes for the User/Admin-User Authentications
 */
Auth::routes();

/*
 * Routes for the Customer/Public Users Only
 */
Route::group(['middleware' => 'auth'], function () {
    includeRouteFiles(__DIR__.'/user/');
});

/*
 * Backend Routes: Only for the Administrative Users -- Like as Super-Admin, Role-Permission Manager, User-Manager, Customer-Manager, Moderator, Author
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    includeRouteFiles(__DIR__.'/admin/');
});
