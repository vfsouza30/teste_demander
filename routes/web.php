<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgoritimoController;
use App\Http\Controllers\QuadroMedalhasController;

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
    return view('algoritimo');
})->name('home');

Route::post('/romanosxarabicos', [AlgoritimoController::class, 'romanosXArabicos'])->name('conversor');

Route::get('/quadromedalhas', [QuadroMedalhasController::class, 'index'])->name('quadro_medalhas');
Route::post('/quadromedalhas', [QuadroMedalhasController::class, 'index'])->name('quadro_medalhas');