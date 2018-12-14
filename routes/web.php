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


Route::get('/', 'WelcomeController@index')->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


//url rute za admina 
//funkcije controllera se pozivaju se po imenu na kraju->
Route::prefix('admin')->group(function(){
Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');
});


