<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\PDF as PDF;

class PDFController extends Controller{
	public function getPDF(){
		$name = "Juanito Perez";
		$pdf = PDF::loadView('PDF_Example', compact('name'));
		return $pdf->stream('prueba.pdf');
	}
}