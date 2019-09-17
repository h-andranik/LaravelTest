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

use Illuminate\Support\Facades\Request;

Route::get('/', 'BlogController@blogs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createblog', 'BlogController@create');
Route::post('/newblog', 'BlogController@newblog');
Route::get('/blogs', 'BlogController@blogs');
Route::get('/blogs/{blog}', 'BlogController@blog');
Route::get('/edit/{blog}', 'BlogController@edit');
Route::get('/myblogs', 'BlogController@myblogs');
Route::post('/editing', 'BlogController@savethis');
Route::post('/deleteblog', 'BlogController@deleteblog');
Route::post('/linkto', 'BlogController@linkto');
Route::get('/linktome', 'BlogController@linktome');
