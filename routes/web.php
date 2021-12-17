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
    $title= 'Welcome to my first LARAVEL HOME page';
    return view(('home'), compact('title'));
})->name('home');

Route::get('/about', function(){
    $data= 'Welcome to my first LARAVEL About page';
    return view(('about'), compact('data'));
})->name('about');

Route::get('/contacts', function(){
    $data= 'Welcome to my first LARAVEL Contact page';
    return view(('contacts'), compact('data'));
})->name('contacts');


