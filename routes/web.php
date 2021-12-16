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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function(){
    $data= 'Welcome to my first programmed page with laravel';
    return view(('home'), compact('data'));
});

Route::get('/about', function(){
    $data= 'About Us';
    return view(('about'), compact('data'));
});