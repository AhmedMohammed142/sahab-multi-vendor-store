<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\WebsiteController@index')->name('index');

// Route::get('/', function(){
//     return view('index'); 
// })->name('index');

Route::get('/login', 'App\Http\Controllers\WebsiteController@login')->name('loginPage');

// Route::get('/login', function(){
//     return view('login');
// })->name('loginPage');

Route::get('/product/{id}', 'App\Http\Controllers\WebsiteController@product')->name('productPage');

// Route::get('/product/{id}', function($id){
//     return view('product');
// })->name('productPage');

Route::get('/search', 'App\Http\Controllers\WebsiteController@search')->name('searchPage');

// Route::get('/search', function(){
//     return view('search');
// })->name('searchPage');