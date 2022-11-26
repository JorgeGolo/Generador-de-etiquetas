<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    public function index() {
        // return 'Esta es la lista de etiquetas';
        return view('etiquetas.index');
    }

    public function create() {
        return view('etiquetas.create');
    }

    public function show($etique) {
        // return "Url con variable $etique";
        // hayq ue pasarle la variabe a la vista

        return view('etiquetas.show', ['etique' => $etique]);
        return view('etiquetas.show', compact('etique'));
    }
}
