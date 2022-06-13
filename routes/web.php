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

//home page
Route::get('/', function () {
    return view('welcome');
});

//show all listings 
Route::get('/{property_type}/{listing_type}/', function () {
    return view('welcome');
});

//single property listing
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
});

//user login
Route::get('/login', function () {
    return view('welcome');
});

//user register
Route::get('/register', function () {
    return view('welcome');
});

//user saved listings
Route::get('/account/saved', function () {
    return view('welcome');
});

//user show status
Route::get('/account/showstatus', function () {
    return view('welcome');
});
