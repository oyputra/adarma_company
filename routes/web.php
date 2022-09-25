<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/article', function () {
    return view('article');
});
Route::get('/show', function () {
    return view('show');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/item', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/category_product', [CategoryProductController::class, 'index'])->name('category_product.index');
Route::get('/category_product/create', [CategoryProductController::class, 'create'])->name('category_product.create');
Route::post('/category_product/store', [CategoryProductController::class, 'store'])->name('category_product.store');
Route::get('/category_product/{id}/show', [CategoryProductController::class, 'show'])->name('category_product.show');
Route::get('/category_product/{id}/edit', [CategoryProductController::class, 'edit'])->name('category_product.edit');
Route::put('/category_product/{id}/update', [CategoryProductController::class, 'update'])->name('category_product.update');
Route::delete('/category_product/{id}/destroy', [CategoryProductController::class, 'destroy'])->name('category_product.destroy');

Route::get('/article/post', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/{id}/show', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/{id}/update', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/article/{id}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/category_article', [CategoryArticleController::class, 'index'])->name('category_article.index');
Route::get('/category_article/create', [CategoryArticleController::class, 'create'])->name('category_article.create');
Route::post('/category_article/store', [CategoryArticleController::class, 'store'])->name('category_article.store');
Route::get('/category_article/{id}/show', [CategoryArticleController::class, 'show'])->name('category_article.show');
Route::get('/category_article/{id}/edit', [CategoryArticleController::class, 'edit'])->name('category_article.edit');
Route::put('/category_article/{id}/update', [CategoryArticleController::class, 'update'])->name('category_article.update');
Route::delete('/category_article/{id}/destroy', [CategoryArticleController::class, 'destroy'])->name('category_article.destroy');

Auth::routes();
