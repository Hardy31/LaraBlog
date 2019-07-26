<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', 'PostController@index');
Route::get('/1', 'PostController@admin');
Route::get('/home', "PostController@home");
Route::get('/posts', "PostController@posts" );
Route::get('/post/{id} ', "PostController@post");
Route::get('/creat', "PostController@creat");
Route::post('/store', "PostController@store");
Route::get('/edit/{id} ', "PostController@edit");
Route::post('/update/{id}',"PostController@update");
Route::get('/delit/{id}', "PostController@delit");




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
