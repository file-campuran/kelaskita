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
    Route::get('/dashboard', 'Dashboard\DashboardController@dataGet')->name('dashboard');
    
    Route::get('matapelajaran', function () { return view('pages.teacher.mapel'); });
    Route::get('materi', function () { return view('pages.teacher.materi'); });
    Route::get('absen', function () { return view('pages.teacher.absen'); });
});
