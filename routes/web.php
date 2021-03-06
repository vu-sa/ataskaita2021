<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Route::get('/en', function () {
    App::setlocale('e');
    return view('en');
});

Route::get('/test', function () {
    App::setlocale('lt');
    return view('main');
});

Route::get('/test/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('main');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
