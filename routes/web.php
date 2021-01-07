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

Route::get('/', 'Auth\AuthController@loginView')->name('login');
Route::post('/', 'Auth\AuthController@login')->name('loginPost');

Route::group(['middleware' => ['auth', 'addmenuroles']], function () {
    Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
    Route::get('/dashboard', 'Dashboard\DashboardController@dataGet');

    //TEACHER
    Route::get('/matapelajaran', 'Teacher\MapelController@mapelGet');
    Route::get('/matapelajaran/ajax', 'Teacher\MapelController@getDataMapel');
    Route::get('/materi', 'Teacher\MateriController@materiGet');
    Route::get('/absen', 'Teacher\AbsenController@absenGet');

    //PROFILE
    Route::get('/profile', 'Profile\ProfileController@ProfileGet');
});
