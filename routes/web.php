<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\MarcaController;



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

Route::get('/', HomeController::class);

Route::get('etiquetas', [EtiquetaController::class, 'index'])->name('etiquetas.index');

Route::get('etiquetas/create', [EtiquetaController::class, 'create'])->name('etiquetas.create');

Route::get('etiquetas/{etique}', [EtiquetaController::class, 'show'])->name('etiquetas.show');


Route::get('marcas', [MarcaController::class, 'index'])->name('marcas.index');

Route::get('marcas/create', [MarcaController::class, 'create'])->name('marcas.create');

Route::get('marcas/{marc}', [MarcaController::class, 'show'])->name('marcas.show');

Route::post('marcas/store',  [MarcaController::class, 'store'])->name('marcas.store');

Route::get('marcas/{marca}/edit', [MarcaController::class, 'edit'])->name('marcas.edit');

Route::put('marcas/{marca}', [MarcaController::class, 'update'])->name('marcas.update');


