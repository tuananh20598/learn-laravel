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

Route::get('/', function () {
    return view('test');
});

Route::get('user',function(){
    return 'User Screen';
})->name('user');

Route::get('product',function(){
    return 'Product Screen';
});

Route::get('news',function(){
    return 'News Screen';
});

Route::get('service',function(){
    return 'Service Screen';
});

Route::get('news/{id}/category/{categoryId}',function($id,$categoryId){
    return "Bài viết số ${id} thuộc danh mục ${categoryId}";
});


Route::get('user/{id}',function($id){
    return "User ID: ${id}";
})->name('user.show') ->where('id','[0-9a-zA-Z]+');

Route::get('user/{id}/branch/{branchId}',function($id,$branchId){
    return "User ID: ${id} - Chi nhánh: ${branchId}";
})->name('user.show.branch');


Route::prefix('backend')->namespace('Backend')->group(function() {
    Route::get('user', 'UserController@index')->name('backend.user.index');
    Route::get('user/create', 'UserController@create')->name('backend.create');
    Route::post('user', 'UserController@store')->name('backend.user.store');

    Route::get('product', 'ProductController@index')->name('backend.product');
    Route::get('news', 'NewsController@index')->name('backend.news');
});

