<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return view('Welcome');
});

Route::get('/show',[ItemController::class,'show']);
Route::post('/todo',[ItemController::class,'store']);
Route::get('/show/delete/{id}',[ItemController::class,'delete']);
Route::get('/show/edit/{id}',[ItemController::class,'edit']);
Route::post('/update/{id}',[ItemController::class,'update']);
