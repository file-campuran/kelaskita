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

Route::group(['middleware' => ['auth', 'addmenuroles', 'addmenuroles2']], function () {
    Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
    Route::get('/dashboard', 'Dashboard\DashboardController@dataGet');

    //TEACHER
    Route::get('/matapelajaran', 'Teacher\MapelController@mapelGet');
    Route::get('/matapelajaran/ajax', 'Teacher\MapelController@getDataMapel');
    Route::get('/materi', 'Teacher\MateriController@materiGet');
    Route::get('/absen', 'Teacher\AbsenController@absenGet');

        //MASUK KELAS
        Route::get('/kelas', 'Kelas\KelasController@KelasGet');
        Route::get('/video_conference', 'Kelas\VideoConferenceController@VideoConferenceGet');
        Route::get('/absensi_kelas', 'Kelas\AbsensiKelasController@AbsensiKelasGet');
        Route::get('/kompetensi_dasar', 'Kelas\KompetensiDasarController@KompetensiDasarGet');
        Route::get('/rpp', 'Kelas\RppController@RppGet');
        Route::get('/kejadian_jurnal', 'Kelas\KejadianJurnalController@KejadianJurnalGet');
        Route::get('/materi_bahan_ajar', 'Kelas\MateriBahanAjarController@ateriBahanAjarGet');
        Route::get('/daftar_siswa_kelas', 'Kelas\DaftarSiswaKelasController@DaftarSiswaKelasGet');
        Route::get('/cbt', 'Kelas\CbtController@CbtGet');
        Route::get('/penilaian_kd3', 'Kelas\PenilaianKd3Controller@RppGet');
        Route::get('/penilaian_kd4', 'Kelas\PenilaianKd4Controller@RppGet');


    //PROFILE
    Route::get('/profile', 'Profile\ProfileController@ProfileGet');
});