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
/*Route Page*/
Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@GetHome'
]);
Route::get('login', [
    'as' => 'login',
    'uses' => 'PageController@GetLogin'
]);
/*Route Admin*/
Route::group(['prefix' => 'admin',/* 'middleware' => 'auth'*/], function () {
	Route::get('/', 'PageController@GetAdmin')->name('indexadmin');
	/* Group for category */
	Route::prefix('category')->group(function () {
        Route::get('/', 'AdminController@GetListCategory')->name('listcategory');
        Route::get('add', 'AdminController@GetAddCategory')->name('addcategory');
        Route::post('add', 'AdminController@PostAddCategory')->name('addcategory');
        Route::get('data', 'AdminController@DataTables')->name('datacategory');
        Route::post('update', 'AdminController@PostEditCategory')->name('editcategory');
        Route::delete('delete', 'AdminController@PostDeleteCategory')->name('deletecategory');
    });
});
/*Route Error*/
Route::get('/error', function () {
   abort(404);
});

