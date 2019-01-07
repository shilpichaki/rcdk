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
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth');
Route::post('register','Auth\RegisterController@register');
Route::get('/subbroker/verify/{token}', 'Auth\RegisterController@verifyUser');


Route::post('login', 'Auth\LoginController@login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('image-view', 'ImageController@index');
Route::post('image-submit', 'ImageController@store');

Route::get('policy', 'PolicyController@index')->name('policy.index');
Route::get('policy/create','PolicyController@create')->name('policy.create');
Route::post('policy','PolicyController@store')->name('policy.store');
Route::get('policy/edit/{id}', 'PolicyController@edit')->name('policy.edit');
Route::put('policy/{id}', 'PolicyController@update')->name('policy.update');
