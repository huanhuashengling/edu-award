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
Route::get('/award/list', 'AwardController@list')->name('list');
Route::get('/award/create', 'AwardController@create')->name('create');
Route::get('/award/detail/{id}', 'AwardController@detail')->name('detail');
Route::get('/award/edit/{id}', 'AwardController@edit')->name('edit');
Route::post('award/vision/{id}', 'AwardController@vision')->name('vision');
Route::get('/dashboard', 'AwardController@dashboard')->name('dashboard');
Route::post('/award/save', 'AwardController@save')->name('save.award.post');

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('upload.post');
