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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', 'WelcomeController@hello');
Route::get('/about', 'AboutController@hello');
Route::get('/article', 'ArticleController@hello');

Route::get('/hello', function () {
    return view('hello', ['name' => 'Rika']);
});
Route::get('/hello','WelcomeController@hello');
Route::get('/home','HomeController@home');
Route::get('about','AboutController@about');
Route::get('article','ArticleController@article');
Route::get('/home','WebController@home');
Route::get('/about','WebController@about');
Route::get('/article','WebController@article');
Route::get('/index', function(){
	return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/manage', 'BookController@index')->name('manage');
Route::get('/book/add','BookController@add');
Route::post('/book/create','BookController@create');
Route::get('/book/edit/{id}','BookController@edit');
Route::post('/book/update/{id}','BookController@update');
Route::get('/book/delete/{id}','BookController@delete');
Route::get('/book/cetak_pdf', 'BookController@cetak_pdf');