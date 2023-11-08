<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganC;
use App\Http\Controllers\HomeController;

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

Route::get('/login', [LoginController::class, 'login']);
Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'keuangan',
    'middleware' => ['auth',]
], function() {
    Route::get('/', [KeuanganC::class, 'index'])->name('pemasukan');
    Route::post('/store', [KeuanganC::class, 'store'])->name('store');
});

Route::group([
    'prefix' => 'history',
    'middleware' => ['auth',]
], function() {
    Route::get('/', [KeuanganC::class, 'history'])->name('history');
    Route::post('/store', [KeuanganC::class, 'store'])->name('store');
    Route::put('/delete/{id}', [KeuanganC::class, 'delete'])->name('history-delete');
});
