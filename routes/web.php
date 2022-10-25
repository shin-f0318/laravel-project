<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\introductionController;
use App\Http\Controllers\contactController;
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

Route::get('hello', [HelloController::class, 'index']);
Route::get('introduction', [introductionController::class, 'introduction']);
Route::get('contact', [contactController::class, 'contact']);
Route::post('confirmation', [contactController::class, 'confirmation']);