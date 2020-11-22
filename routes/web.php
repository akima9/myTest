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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index');

// Route::get('/posts/create', function () {
//     return view('addPost');
// });

Route::get('/posts/create', 'PostController@create');

// Route::post('/addPost', function () {
//     return view('addPost');
// });

Route::post('/posts/store', 'PostController@store');
