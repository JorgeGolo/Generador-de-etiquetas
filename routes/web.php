<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtiquetaController;


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

Route::get('etiquetas', [EtiquetaController::class, 'index'])->name('etiquetas.index');;

Route::get('etiquetas/create', [EtiquetaController::class, 'create'])->name('etiquetas.create');

Route::get('etiquetas/{etique}', [EtiquetaController::class, 'show'])->name('etiquetas.show');;