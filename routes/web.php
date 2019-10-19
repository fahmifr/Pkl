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

Route::get('/home', 'HomeController@dashboard')->name('dashboard');
Route::get('/profilAdmin', 'admin@profil')->name('profilAdmin');
Route::get('/userPenyediaJasa', 'admin@userPenyedia')->name('userPenyediaJasa');
Route::get('/userCostumer', 'admin@userPenyewa')->name('userCostumer');
Route::get('/profilPenyedia', 'penyedia@profil')->name('profilPenyedia');
Route::get('/profilPenyewa', 'penyewa@profil')->name('profilPenyewa');
Route::post('/updateProfil/{id}', 'penyedia@updateProfil')->name('updateProfil');
Route::post('/updatePassword/{id}', 'penyedia@updatePassword')->name('updatePassword');
Route::post('/updateProfil/{id}', 'penyewa@updateProfil')->name('updateProfil');
Route::post('/updatePassword/{id}', 'penyewa@updatePassword')->name('updatePassword');
Route::post('/updateProfil/{id}', 'admin@updateProfil')->name('updateProfil');
Route::post('/updatePassword/{id}', 'admin@updatePassword')->name('updatePassword');

Route::resource('daftarSeni','daftarSeniController',['only'=> 'index','show']);
Route::group(['middleware'=>'auth'],function()
{
	Route::resource('daftarSeni','daftarSeniController',['except'=> 'index','show']);
});