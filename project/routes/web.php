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

use App\Http\Controllers\FormBencanaController;

Route::get('/form-bencana', [FormBencanaController::class, 'index'])->name('form-bencana');
Route::post('/form-bencana/submit', [FormBencanaController::class, 'submit'])->name('form-bencana.submit');
Route::get('/form-bencana/export', [FormBencanaController::class, 'export'])->name('form-bencana.export');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
