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

Route::get('/', [
    'uses' => '\App\Http\Controllers\Front\UrdanController@index',
    'as'  => '/',
]);
Route::get('/category-page', [
    'uses' => '\App\Http\Controllers\Front\UrdanController@categoryPage',
    'as'  => 'category-page',
]);
Route::get('/product-details', [
    'uses' => '\App\Http\Controllers\Front\UrdanController@productDetails',
    'as'  => 'product-details',
]);

Route::get('/dashboard', [
    'uses' => '\App\Http\Controllers\Admin\AdminController@index',
    'as'  => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified'],
]);


Route::group(['middleware' =>['auth:sanctum', 'verified']], function (){
    Route::get('/add-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@addCategory',
        'as'  => 'add-category',
    ]);
    Route::post('/new-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@newCategory',
        'as'  => 'new-category',
    ]);
    Route::get('/manage-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@manageCategory',
        'as'  => 'manage-category',
    ]);
    Route::get('/edit-category/{id}', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@editCategory',
        'as'  => 'edit-category',
    ]);
    Route::post('/update-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@updateCategory',
        'as'  => 'update-category',
    ]);
    Route::get('/delete-category/{id}', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@deleteCategory',
        'as'  => 'delete-category',
    ]);
});