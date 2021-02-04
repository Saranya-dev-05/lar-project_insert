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

Route::get('/',[App\Http\Controllers\ProjecController::class,'index']);
Route::post('store',[App\Http\Controllers\ProjecController::class,'store'])->name('store');
Route::post('/',[App\Http\Controllers\ProjecController::class,'index'])->name('index');

