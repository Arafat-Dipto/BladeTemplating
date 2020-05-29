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

Route::get('/','Usercontroller@index');
Route::get('/about','Usercontroller@about');
Route::get('/services','Usercontroller@services');
Route::get('/gallery','Usercontroller@gallery');
Route::get('/blog','Usercontroller@blog');
Route::get('/contact','Usercontroller@contact');
