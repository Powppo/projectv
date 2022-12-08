<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\inputController;

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
Route::post('/homex', [App\Http\Controllers\inputController::class, 'input'])->name('input');
Route::get('/index2', [App\Http\Controllers\inputController::class, 'index2'])->name('index2');

