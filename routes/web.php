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

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('profile', 'OwnerController@edit')->name('profile.edit');
    Route::put('profile/update', 'OwnerController@update')->name('profile.update');
    // Route for NAS, Package
    Route::resource('nass', 'NassController');
    Route::resource('package', 'PackageController');
    Route::resource('serviceuser', 'ServiceUserController');
    Route::resource('role', 'RoleController');
    Route::resource('location', 'LocationController');
});
