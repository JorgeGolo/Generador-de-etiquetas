<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PDFController;

use Barryvdh\DomPDF\Facade\Pdf AS PDF;
use App\Models\Etiqueta;

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

Route::get('/', HomeController::class)->name('home');

Route::get('marcas', [MarcaController::class, 'index'])->name('marcas.index');

Route::get('marcas/create', [MarcaController::class, 'create'])->name('marcas.create');

Route::get('marcas/{marc}', [MarcaController::class, 'show'])->name('marcas.show');

Route::post('marcas/store',  [MarcaController::class, 'store'])->name('marcas.store');

Route::get('marcas/{marca}/edit', [MarcaController::class, 'edit'])->name('marcas.edit');

Route::put('marcas/{marca}', [MarcaController::class, 'update'])->name('marcas.update');

Route::delete('marcas/{marca}',[MarcaController::class, 'destroy'])->name('marcas.destroy');


// Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');

// ...

Route::resource('productos', ProductoController::class);

// Route::get('etiquetas', [EtiquetaController::class, 'index'])->name('etiquetas.index');

// Route::get('etiquetas/create', [EtiquetaController::class, 'create'])->name('etiquetas.create');

// Route::get('etiquetas/{etique}', [EtiquetaController::class, 'show'])->name('etiquetas.show');


Route::resource('etiquetas', EtiquetaController::class);

Route::get('etiqueta/{etiquet}', [EtiquetaController::class, 'pdf'])->name('etiqueta.pdf');

// Route::get('pdf', [PdfController::class, 'index']);

// Route::get('/pdf', 'PDFController@getPDF')->name('getpdf');

// Route::get('pdf', [PDFController::class, 'getpdf'])->name('getpdf');

// Route::get('pdf', function() {

//     $name = "Juanito Perez";
//     $pdf = PDF::loadView('PDF_Example', compact('name'));
//     return $pdf->stream('prueba.pdf');

// })->name('getpdf');


Route::get('pdf/{etique}', function($id) {

    $etique = Etiqueta::find($id);
    $pdf = PDF::loadView('etiquetas.pdf', compact('etique'));
    $pdf->set_paper(array(0,0,650,531));

    return $pdf->stream('prueba.pdf');

})->name('getpdf');