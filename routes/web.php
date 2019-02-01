
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
Route::get('/home', 'HomeController@index')->name('user.home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/workout', 'WorkoutController@index')->name('user.workout');
Route::get('/workout/upper', 'WorkoutController@upper')->name('user.workout.upper');
Route::get('/workout/lower', 'WorkoutController@lower')->name('user.workout.lower');
Route::get('/progress', 'WorkoutController@progressIndex')->name('user.progress');
Route::post('/user/submit', 'UserController@submit')->name('user.submit');
Route::get('/menu', 'MenuController@index')->name('user.menu');
Route::post('/menu/submit', 'StatController@submit')->name('user.stat.submit');




//url rute za admina 
//funkcije controllera se pozivaju se po imenu na kraju->
Route::prefix('admin')->group(function(){
Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');
});


