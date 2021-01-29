<?php

use App\Http\Controllers\Backend\UserController;
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
Route::get('test-management', function () {
    return view('test');
})->name('test');
Route::get('test/{id}/category/{categoryID}', function ($id, $categoryID) {
    return "Test so ${id} category=${categoryID}";
});
Route::get('test-management/{id}', function ($id) {
    return "Test id = ${id}";
})->name('test.show');
Route::get('backend/user', function () {
    return "Backend user";
})->name('backend.user');
Route::get('backend/product', function () {
    return "Backend product";
})->name('backend.product');
Route::get('backend/news', function () {
    return "Backend news";
})->name('backend.news');
// Route::group(['prefix'=>'backend'],function(){
//     Route::get('user', function () {
//         return "Backend user";
//     })->name('backend.user');
//     Route::get('product', function () {
//         return "Backend product";
//     })->name('backend.product');
//     Route::get('news', function () {
//         return "Backend news";
//     })->name('backend.news');
// });
Route::group(['prefix'=>'backend','namespace'=>'Backend'],function(){
    Route::get('user','UserController@index')->name('backend.user');
    Route::get('product','ProductController@index')->name('backend.product');
});

