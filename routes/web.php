<?php

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

// Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
//     Route::get('/','AdminController@index')->name('admin');
//     Route::get('/file-manager',function(){
//         return view('backend.layouts.file-manager');
//     })->name('file-manager');
//     // user route
//     Route::resource('users','UsersController');
   
// });

Route::get('/admin', 'HomeController@search')->name('dashboard');
