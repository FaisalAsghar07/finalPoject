<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});


// Route::view('/', 'welcome');

Route::resource('customers', App\Http\Controllers\customerController::class);


Route::resource('pizzas', App\Http\Controllers\pizzaController::class);


Route::resource('members', App\Http\Controllers\memberController::class);


Route::resource('drivers', App\Http\Controllers\driverController::class);


Route::resource('orders', App\Http\Controllers\ordersController::class);


Route::get("/",[HomeController::class,"index"]);


