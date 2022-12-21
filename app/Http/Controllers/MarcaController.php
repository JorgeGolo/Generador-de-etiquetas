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

        // Estas tres líneas se sustituyen por el método create de la clase Marca 
        // no es necesario instanciar el objeto

        // $marca = new Marca();
        // $marca->name = $request->name;
        // $marca->registrosan = $request->regsan;

        $marca = Marca::create([
            'name' => $request->name,
            'registrosan' => $request->regsan
        ]);
        

        $marca->save();
        
        return redirect()->route('marcas.index',$marca);
    }

    public function edit(Marca $marca){
        // $marca = Marca::find($id);
        return view("marcas.edit", compact("marca"));
    }

    // public function update(Marca $marca) {
    //     return $marca;
    // }

    // public function update(Request $request, Marca $marca) {
        // return $request->all();
    // }


    public function update(Request $request, Marca $marca) {

        $request->validate([
            'name' => 'required',
            'regsan' => 'required',
        ]);

        $marca->name = $request->name;
        $marca->registrosan = $request->regsan;
        $marca->save();

        // podríamos comentamos las tres líneas siguientes, parecido a como hicimos en el método store
        // para utilizar el método update con la colección de request como parámetro 
        // pero creo que esta vez no funciona porque 
        // el campo del formulario y el campo de la base de datos no se llaman EXACTAMENTE IGUAL
        // dejo la línea comentada

        // $marca->update($request->all());

        // no es necesario pasar la variable id, con el objeto es suficiente
        // return redirect()->route('marcas.show',$marca->id);

        return redirect()->route('marcas.index',$marca);
    }

    public function destroy(Marca $marca) {
        $marca->delete();
        return redirect()->route('marcas.index');

    }  

}
