<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {

        $productos =  Producto::orderBy('id','DESC')->get();

        return view("productos.index", compact('productos'));
       
    }

    public function create() {

        $marcas = Marca::all();

        return view("productos.create",  compact('marcas'));
        
    }

    public function store(Request $request) {

        $producto = Producto::create([
            'name' => $request->name,
            'marca_id' => $request->marca_id
        ]);

        $producto->save();

        return redirect()->route('productos.index',$producto);

    }


    public function show($id) {

        $prod = Producto::find($id);

        return view('productos.show', compact('prod'));

    }

    public function update(Request $request, Producto $producto) {
        // $producto->name = $request->name;
        // $producto->marca_id = $request->marca_id;
        // $producto->save();

        $producto->update($request->all());

        return redirect()->route('productos.index',$producto);

    }

    public function destroy(Producto $producto) {
        $producto->delete();
        return redirect()->route('productos.index');

    }  

    public function edit(Producto $producto){
        $marcas = Marca::all();
        return view("productos.edit", compact("producto"))->with(compact("marcas"));
    }

    
}
