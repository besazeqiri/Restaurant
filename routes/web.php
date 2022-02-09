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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'redirects'])->name('redirects');
Route::get('/redirects/create', [App\Http\Controllers\HomeController::class, 'create'])->name('redirects.create');
Route::post('/redirects/store', [App\Http\Controllers\HomeController::class, 'redirects_store'])->name('redirects.store');



//users
Route::get('/users', [App\Http\Controllers\AdminController::class, 'index'])->name('users.index');
Route::get('users/delete/{id}',[\App\Http\Controllers\AdminController::class, 'delete'])->name('users.delete');
Route::get('/users/create', [App\Http\Controllers\AdminController::class, 'create'])->name('users.create');
Route::post('/users/store', [App\Http\Controllers\AdminController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}',[\App\Http\Controllers\AdminController::class, 'edit'])->name('users.edit');
Route::post('users/update/{id}', [\App\Http\Controllers\AdminController::class, 'update'])->name('users.update');



//foods
Route::get('/foods', [App\Http\Controllers\AdminController::class, 'food_index'])->name('foods.index');
Route::get('/foods/create', [App\Http\Controllers\AdminController::class, 'food_create'])->name('foods.create');
Route::post('/foods/store', [App\Http\Controllers\AdminController::class, 'food_store'])->name('foods.store');
Route::get('foods/delete/{id}',[\App\Http\Controllers\AdminController::class, 'foods_delete'])->name('foods.delete');
Route::get('foods/edit/{id}',[\App\Http\Controllers\AdminController::class, 'foods_edit'])->name('foods.edit');
Route::post('foods/update/{id}', [\App\Http\Controllers\AdminController::class, 'foods_update'])->name('foods.update');


//reservation
Route::get('/reservation', [App\Http\Controllers\AdminController::class, 'reservation_index'])->name('reservation.index');
Route::get('/reservation/create', [App\Http\Controllers\AdminController::class, 'reservation_create'])->name('reservation.create');
Route::post('/reservation/store', [App\Http\Controllers\AdminController::class, 'reservation_store'])->name('reservation.store');
Route::get('reservation/delete/{id}',[\App\Http\Controllers\AdminController::class, 'reservation_delete'])->name('reservation.delete');
Route::get('reservation/edit/{id}',[\App\Http\Controllers\AdminController::class, 'reservation_edit'])->name('reservation.edit');
Route::post('reservation/update/{id}', [\App\Http\Controllers\AdminController::class, 'reservation_update'])->name('reservation.update');


//chef
Route::get('/chefs', [App\Http\Controllers\AdminController::class, 'chef_index'])->name('chefs.index');
Route::get('/chefs/create', [App\Http\Controllers\AdminController::class, 'chef_create'])->name('chefs.create');
Route::post('/chefs/store', [App\Http\Controllers\AdminController::class, 'chef_store'])->name('chefs.store');
Route::get('chefs/delete/{id}',[\App\Http\Controllers\AdminController::class, 'chef_delete'])->name('chefs.delete');
Route::get('chefs/edit/{id}',[\App\Http\Controllers\AdminController::class, 'chef_edit'])->name('chefs.edit');
Route::post('chefs/update/{id}', [\App\Http\Controllers\AdminController::class, 'chef_update'])->name('chefs.update');












