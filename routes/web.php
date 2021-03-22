<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;

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
Route::get('/', [ContactosController::class, 'index'])->name('contactos.index');
Route::post('/', [ContactosController::class, 'store'])->name('contactos.store');

Route::get('/nuevo', function () {
    return view('nuevo');
});

Route::get('/editar/{id}', [ContactosController::class, 'edit'])->name('contactos.edit');
Route::put('/editar/{contacto}', [ContactosController::class, 'update'])->name('contactos.update');
Route::delete('/editar/{id}', [ContactosController::class, 'destroy'])->name('contactos.destroy');