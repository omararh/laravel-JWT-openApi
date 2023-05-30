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


Route::post('/createUser', [\App\Http\Controllers\UserController::class, 'createUser'])->name('createUser');
Route::get('/getUsers', [\App\Http\Controllers\UserController::class, 'getUsers'])->name('getUsers');

