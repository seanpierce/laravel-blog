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

Route::view('/', 'welcome');

Auth::routes();

// Basic pages
Route::get('/home', 'HomeController@index')
    ->name('home');
    

// Admin portal
Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin/posts', 'AdminController@posts')
    ->middleware('is_admin');

Route::get('/admin/new-post', 'AdminController@new_post')
    ->middleware('is_admin');
