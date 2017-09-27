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

Auth::routes();

Route::name('posts')->get('/posts', 'PostController@index');
Route::name('posts.show')->get('/posts/{slug}', 'PostController@show');

Route::name('tutorials')->get('/tutoriels', 'TutorialController@index');
Route::name('tutorials.show')->get('/tutoriels/{slug}/{part}', 'TutorialController@show');
