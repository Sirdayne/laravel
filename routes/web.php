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


use App\Task;


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/types', 'PagesController@types');
Route::get('/contacts', 'PagesController@contacts');
/* services pages */
Route::get('/jalousie', 'PagesController@jalousie');
Route::get('/sew', 'PagesController@sew');
Route::get('/decor', 'PagesController@decor');
Route::get('/wallpapers', 'PagesController@wallpapers');
Route::get('/floor', 'PagesController@floor');
Route::get('/business', 'PagesController@business');
Route::get('/dealers', 'PagesController@dealers');


Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

