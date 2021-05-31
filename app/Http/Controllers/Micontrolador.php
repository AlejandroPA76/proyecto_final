<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Micontrolador extends Controller
{
    public function cRegistrar(){

	return view('registrar');
    }

    public function showEmpleadosSu(){

 	return view('supervisor.s_index');
    }

    public function crearSuEmpleado(){

    	return view('supervisor.s_crear');
    }

    public function subirSuEmpleado(Request $request){
    	//all es un json con todo
	//ejemplo
	//{"_token":"3fpXFN1qFqPSJiQOlr4qi9tjscQxwKbbKoD0eZEu","descripcion":"asd","precio":"4"}
    return $request->all();
   // $request->all();
   // $newProducto = new Product;
   // $newProducto->descripcion = $request->input('descripcion');
   // $newProducto->Precio = $request->input('precio');
    //$newProducto->save();

//con el  witch muestro un anuncio temportal y se guarda en info
   // return redirect()->route('products.index')->with('info','producto creado');
 
    }

}
