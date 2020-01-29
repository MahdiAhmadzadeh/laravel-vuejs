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


use  Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');







Route::get('/vue','vueController@index')->name('vue.index');
Route::post('/vueUpdate/{vue}','vueController@vueUpdate')->name('vueUpdate');
Route::post('/vueSearch','vueController@vueSearch')->name('vueSearch');
Route::put('/saveEdit/{vue}','vueController@saveEdit')->name('saveEdit');
Route::get('/allVue','vueController@allVue')->name('vue.all');
Route::post('/storeVue','vueController@store')->name('vue.store');
Route::post('/deleteVue/{vue}','vueController@deleteVue')->name('vue.deleteVue');
Route::post('/ShowUpdate/{vue}','vueController@ShowUpdate')->name('vue.ShowUpdate');



























































