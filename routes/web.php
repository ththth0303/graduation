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
	return redirect(route('home'));
});

Route::get('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('login', 'Auth\LoginController@authenticate')->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('task', 'TaskController');
    Route::resource('news', 'NewsController');
    Route::resource('document', 'DocumentController');
    Route::resource('student', 'StudentController');

    Route::get('user/search/{name?}', 'UserController@search');
    Route::resource('user', 'UserController');

    Route::get('download/{name}/{path}', 'AttachController@download')->name('download_attach');
    Route::post('update/task', 'TaskController@updateProcess')->name('update-task');
});
