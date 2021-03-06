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
Route::get('test', function () {
    return "ahiahiahiahiia";
});
Route::get('total', function () {
    $a = 1;
    $b = 2;
    return "Total :" . ($a + $b);
});
Route::get('test/{id}', function ($id) {
    return "User" . $id;
})->middleware('checkage');
Route::get('post/{post}/comment/{comment}', function ($postID, $commentID) {
    return "Post: " . $postID . " comment: " . $commentID;
});
Route::get('user/{name?}', function ($name = null) {
    if ($name == null) {
        return "Name is exits";
    } else {
        return "Name " . $name;
    }
});
Route::prefix('admin')->group(function () {
    Route::get('user', function () {
        return "Test group";
    });
});
