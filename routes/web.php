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

    $hello = 'Hello World';
    $items = [
        'Home',
        'Search',
        'Community',
        'About us',
        'Blog',
        'Log in',
    ];

    return view('home', compact('hello', 'items'));
});


Route::get('/search', function () {
    return 'Search Menu';
});
Route::get('/community', function () {
    return 'Community Menu';
});
Route::get('/aboutus', function () {
    return 'About us Menu';
});
Route::get('/blog', function () {
    return 'Blog Menu';
});
Route::get('/login', function () {
    return 'login Menu';
});