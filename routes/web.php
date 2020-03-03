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

//Auth::routes();

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    Route::resource('permissions', 'PermissionsController');
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy'); 
    
    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductsController');

    Route::delete('pages/destroy', 'PagesController@massDestroy')->name('pages.massDestroy');
    Route::resource('pages', 'PagesController');

    Route::resource('settings', 'SettingsController');

});
