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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' =>'customer'], function () {
    Route::get('/', function(){
        return"<h1>customer</h1>";
    });
    Route::get('/show', function(){
        return"<h1>customer show</h1>";
    });
    Route::get('/create', function(){
        return"<h1>customer create</h1>";
    });

});