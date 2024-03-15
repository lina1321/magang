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

use App\Http\Controllers\KejadianController;
Route::resource('/kejadian', KejadianController::class);
Route::get('/kejadian/filter', [KejadianController::class, 'filterByJenisBencana'])->name('filterByJenisBencana');


use App\Http\Controllers\KegiatanController;
Route::post('/kegiatan', 'KegiatanController@store');

Route::get('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan');
Route::resource('/kegiatan', KegiatanController::class);
Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');


use App\Http\Controllers\KejadiansController;
Route::resource('/kejadians', KejadiansController::class);
