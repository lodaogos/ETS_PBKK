<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FormulirController;
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


Route::get('/barang', [BarangController::class, 'index'])->name('barang');

Route::get('/formulir', [FormulirController::class, 'index'])->name('formulir');


Route::post('/formulir', [FormulirController::class, 'create'])->name('formulir.create');

Route::post('/deleteformulir', [FormulirController::class, 'delete'])->name('formulir.delete');

Route::post('/editformulir', [FormulirController::class, 'edit'])->name('formulir.edit');

Route::post('/updateformulir', [FormulirController::class, 'update'])->name('formulir.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
