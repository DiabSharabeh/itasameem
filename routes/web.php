<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; //use contact controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/our-services', function () {
    return view('our-services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/pricing', function () {
    return view('pricing');
});

Route::post('/contact',[ ContactController::class,'sendEmail'])->name('sendEmail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
