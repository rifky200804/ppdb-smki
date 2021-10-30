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
use  Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $request->session()->forget('peserta');
    $request->session()->forget('ortu');
    $request->session()->forget('asalsekolah');
    
    return view('main.dashboard');
})->name('dashboard');

Route::group(['middleware' => 'revalidate'], function(){
    Route::get('/sign','AuthController@login')->name('login');
    Route::post('/postlogin','AuthController@postlogin')->name('postlogin');
    Route::get('/logout','AuthController@logout')->name('logout');
    
});

Route::group(['middleware'=>'auth','revalidate'],function(){
    Route::get('/petugas','PetugasController@index')->name('petugas.index');
    Route::get('/petugas/create','PetugasController@create')->name('petugas.create');
    Route::post('/petugas/add','PetugasController@store')->name('petugas.store');
    Route::get('/petugas/{id}/delete','PetugasController@destroy')->name('petugas.destroy');

    Route::get('/peserta','PesertaController@index')->name('peserta');
    Route::get('/peserta/{id}/delete','PesertaController@destroy')->name('peserta.destroy');
    Route::put('/peserta/keterangan/syarat/{id}','SyaratController@keterangan')->name('ket.syarat');
    Route::get('/peserta/survey/{id}','SurveyController@edit')->name('survey');
    Route::put('/peserta/survey/update/{id}','SurveyController@update')->name('update.survey');
    Route::put('/peserta/keterangan/survey/{id}','SurveyController@keterangan')->name('ket.survey');

    Route::get('/peserta/document/{id}','DokumentasiController@index')->name('document');
    Route::get('/peserta/document/upload/{id}','DokumentasiController@edit')->name('document.edit');
    Route::put('/peserta/updatedocument/{id}','DokumentasiController@update')->name('document.update');
    Route::put('/peserta/keterangan/document/{id}','DokumentasiController@keterangan')->name('ket.document');

    Route::get('/peserta/tpa/{id}','TPAController@edit')->name('tpa.edit');
    Route::put('/peserta/updatetpa/{id}','TPAController@update')->name('tpa.update');
    Route::put('/peserta/keterangan/tpa/{id}','TPAController@keterangan')->name('ket.tpa');

    Route::get('/peserta/hasil/{id}','PesertaController@hasil')->name('hasil');
    Route::put('/peserta/keterangan/{id}','PesertaController@keterangan')->name('keterangan');

    Route::get('/peserta/print','PesertaController@actions')->name('print');

    Route::get('/peserta/download/{file}','PesertaController@downloadfile')->name('file');

    Route::get('/peserta/export/{pdf}','PesertaController@exportpdf')->name('pdf');
});


Route::get('/peserta/{id}/detail','PesertaController@show')->name('peserta.detail');
Route::get('/peserta/lulus','PesertaController@lulus')->name('peserta.lulus');

Route::get('/daftar','PesertaController@create')->name('daftar.peserta');
Route::post('/daftar-peserta','PesertaController@store')->name('daftar-peserta');
Route::get('/daftar2','OrangTuaController@create')->name('daftar.ortu');
Route::post('/daftar-peserta2','OrangTuaController@store')->name('daftar-peserta2');
Route::get('/daftar3','AsalSekolahController@create')->name('daftar.asalsekolah');
Route::post('/daftar-peserta3','AsalSekolahController@store')->name('daftar-peserta3');
Route::get('/daftar4','SyaratController@create')->name('daftar.syarat');
Route::post('/daftar-peserta4','SyaratController@store')->name('daftar-peserta4');
