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

Route::get('/','WelcomeController@index')->name('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('role','RoleController')->middleware('isAdmin');
Route::resource('user','UserController')->middleware('isAdmin');
// Route::get('templateEmail','MailFormController@news')->name('templateEmail');
Route::resource('mailForm' , "MailFormController")->middleware('isAdmin');
Route::resource('admin' , "AdminController")->middleware('isAdmin');



Route::resource('header','HeaderController')->middleware('isAdmin');
Route::resource('service','ServiceController')->middleware('isAdmin');
Route::resource('project' ,'ProjectController')->middleware('isAdmin');
Route::resource('team' ,'TeamController')->middleware('isAdmin');
Route::resource('testi','TestiController')->middleware('isAdmin');
Route::resource('contact','ContactController')->middleware('isAdmin');