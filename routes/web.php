<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix("/myanmarporn")->group(function () {
    Route::resource("article", "ArticleController");
    Route::resource("category", "CategoryController");
    Route::resource("genre", "GenreController");
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/feedback', 'FeedbackController@index')->name('feedback.index');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name("index");

Route::get("/", "PostController@index")->name("post.index");
Route::get("/post/{id}", "PostController@show")->name("post.show");

// Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

Route::get('/pbc/{id}', "PostByCat@index")->name('pbc.index');
Route::get('pbg/{id}', "GenreController@showPostByGenre")->name('pbg.index');
