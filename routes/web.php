<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AnimalController;

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

Route::get('/home', function () {
     return view('index');
});

Route::get('/search', ['App\Http\Controllers\SearchController', 'search'])->name('search');
Route::get('/owner-detail', ['App\Http\Controllers\DetailController', 'ownerDetail']);

//Route::get('/create', [AnimalController::class, 'create'])->name('animal.create');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');

Route::post('/animals', ['App\Http\Controllers\AnimalController', 'store'])->name('animals.store');

Route::get('/animals/{id}/edit', [AnimalController::class, 'edit'])->name('animals.edit');

Route::put('/animals/{id}', [AnimalController::class, 'update'])->name('animals.update');

Route::delete('/animals/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
