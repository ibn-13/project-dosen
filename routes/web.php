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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/conseling', [App\Http\Controllers\ConselingController::class, 'index'])->name('conseling');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::get('/jurnal', [App\Http\Controllers\JurnalController::class, 'index'])->name('jurnal');
Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');
Route::get('/view', [App\Http\Controllers\ViewController::class, 'index'])->name('view');
Route::get('/harian', [App\Http\Controllers\HarianController::class, 'index'])->name('harian');
Route::get('/Learn', [App\Http\Controllers\LearnController::class, 'index'])->name('learn');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
Route::get('/bayar', [App\Http\Controllers\BayarController::class, 'index'])->name('bayar');