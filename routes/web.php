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
    return view('index');
});
Route::match(['get', 'post'], '/admin', 'AdminController@login');
Route::group(['middleware'=>['auth']], function(){
 Route::get('/admin/dashboard', 'AdminController@dashboard');
 Route::get('/admin/setting', 'AdminController@setting');
 Route::get('/admin/chkPass', 'AdminController@chkPass');

} );
Route::get('/logout', 'AdminController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
