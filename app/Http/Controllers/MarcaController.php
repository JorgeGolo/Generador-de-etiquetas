<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index() {

        $marcas =  Marca::all();
        return view("marcas.index", compact('marcas'));
        

    }

    public function create() {

        return view("marcas.create");
    }

    public function show($id) {

        $marc = Marca::find($id);

        return view('marcas.show', compact('marc'));
    }

    public function store(Request $request) {

        // return $request->all();

        $marca = new Marca();

        $marca->name = $request->name;
        $marca->registrosan = $request->regsan;

        $marca->save();
        
        return redirect()->route('marcas.show',$marca);
    }

}
