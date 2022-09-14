<?php

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
Route::get('/article/post', 'ArticleController@index')->name('article.post');
Route::get('/article/add', 'ArticleController@create')->name('article.add');
Route::get('/article/category', 'ArticleController@category')->name('article.category');

Auth::routes();
