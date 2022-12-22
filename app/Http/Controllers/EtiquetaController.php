<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    public function index() {
        // return 'Esta es la lista de etiquetas';
        // return view('etiquetas.index');

        // $etiquetas =  Etiqueta::all();

        $etiquetas =  Etiqueta::orderBy('id','DESC')->get();

        return view("etiquetas.index", compact('etiquetas'));

        

    }

    public function create() {

        $marcas = Marca::all();
        $productos = Producto::all();
        return view('etiquetas.create', compact('marcas'))->with(compact('productos'));
    }

    public function show($id) {
        // return "Url con variable $etique";
        // hayq ue pasarle la variabe a la vista

        $etique = Etiqueta::find($id);

        return view('etiquetas.show', compact('etique'));
    }

    public function pdf($id) {

        $etique = Etiqueta::find($id);

        return view('etiquetas.pdf', compact('etique'));

    }

    public function store(Request $request) {

        $etiqueta = Etiqueta::create([
            'name' => $request->name,
            'adicional' => $request->adicional,
            'fechaenvasado' => $request->fechaenvasado,
            'fechacaducidad' => $request->fechacaducidad,
            'peso' => $request->peso,
            'precio' => $request->precio,
            'preciokilo' => $request->preciokilo,
            'producto_id' => $request->producto_id
        ]);

        $etiqueta->save();

        return redirect()->route('etiquetas.index',$etiqueta);

    }


    public function update(Request $request, Etiqueta $etiqueta) {

        $etiqueta->update($request->all());

        return redirect()->route('etiquetas.index',$etiqueta);

    }


    public function destroy(Etiqueta $etiqueta) {
        $etiqueta->delete();
        return redirect()->route('etiquetas.index');
    }  


    public function edit(Etiqueta $etiqueta){
        $marcas = Marca::all();
        $productos = Producto::all();
        return view("etiquetas.edit", compact("etiqueta"))->with(compact("marcas"))->with(compact("productos"));
    }

}
