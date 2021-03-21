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

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/award/list', 'AwardController@list')->name('list');
Route::get('/award/create', 'AwardController@create')->name('create');
Route::get('/award/detail/{id}', 'AwardController@detail')->name('detail');
Route::get('/award/edit/{id}', 'AwardController@edit')->name('edit');
Route::post('award/vision/{id}', 'AwardController@vision')->name('vision');
Route::post('/award/save', 'AwardController@save')->name('save.award.post');
Route::get('/award/delete', 'AwardController@delete')->name('delete.award.get');


Route::get('image-upload', 'ImageUploadController@imageUpload')->name('upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('upload.post');


Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/numPerTypeChart', 'DashboardController@numPerTypeChart')->name('dashboard.numPerTypeChart.get');
Route::get('/dashboard/numPerYearChart', 'DashboardController@numPerYearChart')->name('dashboard.numPerYearChart.get');
Route::get('/dashboard/numPerLevelChart', 'DashboardController@numPerLevelChart')->name('dashboard.numPerLevelChart.get');
Route::get('/dashboard/numPerRankChart', 'DashboardController@numPerRankChart')->name('dashboard.numPerRankChart.get');
 