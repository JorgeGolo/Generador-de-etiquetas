<?php

namespace App\Http\Controllers;

use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {

        // $marcas =  Marca::all();
        
        $productos =  Producto::orderBy('id','DESC')->get();

        return view("productos.index", compact('productos'));
       

    }

    public function store() {

    }

    public function create() {
        
    }

    public function show() {
        
    }

    public function update() {
        
    }

    public function destroy() {
        
    }

    public function edit() {
        
    }

    
}
