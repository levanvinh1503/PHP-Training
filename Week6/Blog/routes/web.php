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
Route::get('/', 'PageController@GetHome')->name('home');
Route::get('login', 'PageController@GetLogin')->name('login');
Route::post('login', 'PageController@PostLogin')->name('login');
Route::get('category/{slugCategory}', 'PageController@GetCategory')->name('homecategory');
Route::get('post/{slugPost}', 'PageController@GetPost')->name('homepost');
/*Route Admin*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@GetAdmin')->name('indexadmin');
    Route::get('logout', 'AdminController@GetLogout')->name('logout');
    /* Group for category */
    Route::prefix('category')->group(function () {
        Route::get('/', 'CategoryController@GetListCategory')->name('listcategory');
        Route::post('updates', 'CategoryController@PostEditCategory')->name('editcategory');
        Route::get('add', 'CategoryController@GetAddCategory')->name('addcategory');
        Route::post('add', 'CategoryController@PostAddCategory')->name('addcategory');
        Route::get('data', 'CategoryController@DataTables')->name('datacategory');
        Route::post('delete', 'CategoryController@PostDeleteCategory')->name('deletecategory');
    });
    /* Group for post */
    Route::prefix('post')->group(function () {
        Route::get('/', 'PostController@GetListPost')->name('listpost');
        Route::get('updates/{idPost}', 'PostController@GetEditPost')->name('editpost');
        Route::post('updates/{idPost}', 'PostController@PostEditPost')->name('editpost');
        Route::get('add', 'PostController@GetAddPost')->name('addpost');
        Route::post('add', 'PostController@PostAddPost')->name('addpost');
        Route::get('delete/{id}', 'PostController@GetDeletePost')->name('deletepost');
    });
    /**/
    Route::group(['prefix' => 'laravel-filemanager'], function () {
       \UniSharp\LaravelFilemanager\Lfm::routes();
   });
});
/*Route Error*/
Route::get('/error', function () {
 abort(404);
});

