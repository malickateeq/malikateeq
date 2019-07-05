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

Route::get('/', 'SettingsController@index');

Auth::routes();

Route::get('/home', 'SettingsController@dashboard')->name('home');
Route::get('/site-settings', 'SettingsController@site_settings')->name('site-settings');
Route::get('/profile-settings', 'SettingsController@profile_settings')->name('profile-settings');

Route::post('/update-profile', 'SettingsController@update_profile')->name('update-profile-settings');
Route::post('/update-site', 'SettingsController@update_site')->name('update-site-settings');
