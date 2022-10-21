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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Response string
Route::get('/user', function () {
    return "Hello Thanh Danh";
});

// Response array
Route::get('/foods', function () {
    return ["sushi", "sashimi", "tofu"];
});

// Response an object
Route::get('/aboutMe', function () {
    return response() -> json([
        'name' => 'Cao Thanh Danh',
        'email' => 'hocsinhdanh@gmail.com'
    ]);
});

// Response another request = redirect
Route::get('/something', function () {
    return redirect('/aboutMe');
});
