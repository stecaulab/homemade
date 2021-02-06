<?php

use App\Http\Controllers\CommentController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




/* route per vedere tutti i post*/

Route::redirect('/', '/welcome');
Route::get('/welcome','PostController@all');



/* route per vedere singolo post*/

Route::get('/posts/{slug}', 'PostController@single');


//route per vedeecategorie

Route::get('/category/{slug}','CategoryController@all');


/* route per Admin*/

Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');




/* route per Comments*/

Route::get('/{post}/comments','CommentController@index');
Route::post('/{post}/comments','CommentController@store');

/* route per Search*/

Route::get('/search','SearchController@search');
