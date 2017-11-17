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
//     return view('index');
// });
// Route::get('/task', function () {
//     return view('tasks.index');
// });
// Route::get('/new', function () {
//     return view('news.index');
// });
// Route::get('/document', function () {
//     return view('documents.index');
// });
Route::group(['prefix' => ''], function () {
});
Route::resource('user', 'UserController');

Route::get('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('login', 'Auth\LoginController@authenticate')->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index');
    Route::resource('task', 'TaskController');
    Route::resource('news', 'NewsController');
    Route::resource('document', 'DocumentController');
    Route::resource('student', 'StudentController');
});
