<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index() {

        // $marcas =  Marca::all();
        
        $marcas =  Marca::orderBy('id','DESC')->get();

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

        $request->validate([
            'name' => 'required',
            'regsan' => 'required',
        ]);

        $marca = new Marca();

        $marca->name = $request->name;
        $marca->registrosan = $request->regsan;

        $marca->save();
        
        return redirect()->route('marcas.show',$marca);
    }

    public function edit(Marca $marca){
        // $curso = Curso::find($id);
        return view("marcas.edit", compact("marca"));
    }

    // public function update(Marca $marca) {
    //     return $marca;
    // }

    // public function update(Request $request, Marca $marca) {
        // return $request->all();
    // }


    public function update(Request $request, Marca $marca) {

        $marca->name = $request->name;
        $marca->registrosan = $request->regsan;

        $marca->save();

        // return redirect()->route('marcas.show',$marca->id);

        return redirect()->route('marcas.index',$marca);
    }

}
