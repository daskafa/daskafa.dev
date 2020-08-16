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

// Front
Route::get('/', 'Front\homepageController@index')->name('homepage');
Route::get('/blog', 'Front\blogController@index')->name('blog');
Route::get('/blog/{slug}', 'Front\blogController@single')->name('single');

// Login
Route::get('/login', 'Back\AuthController@login')->middleware('isLogin')->name('login');
Route::post('/login', 'Back\AuthController@loginPost')->middleware('isLogin')->name('admin.login.post');

Route::get('/logout', 'Back\AuthController@logout')->middleware('isAdmin')->name('logout');



// Back
Route::get('/dashboard', 'Back\dashboardController@index')->middleware('isAdmin')->name('dashboard');

Route::post('/dashboard/createpost', 'Back\dashboardController@createPost')->name('createPost');
Route::get('/dashboard/deletepost/{id}', 'Back\dashboardController@deletePost')->name('deletePost');
