<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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


Route::get('/home', ['App\Http\Controllers\IndexController', 'animals']);


Route::get('/search', ['App\Http\Controllers\SearchController', 'search'])->name('search');
Route::get('/owner-detail', ['App\Http\Controllers\DetailController', 'ownerDetail']);
Route::get('/animal-detail/{id}', ['App\Http\Controllers\DetailController', 'animalDetail']);


