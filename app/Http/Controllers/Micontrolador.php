<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//agramos la instancia del modelo usuario para poder agregar datos al db
use App\Models\Usuario;
//autenticar
use AuthenticatesUsers;

class Micontrolador extends Controller
{
    public function cRegistrar(){

	return view('registrar');
    }

    public function showEmpleadosSu(){
      $MostrarProductos = Usuario::all();

 	return view('supervisor.s_index',compact('MostrarProductos'));
    }

    public function crearSuEmpleado(){

    	return view('supervisor.s_crear');
    }

    public function subirSuEmpleado(Request $request){
    	//all es un json con todo
	//ejemplo
	//{"_token":"3fpXFN1qFqPSJiQOlr4qi9tjscQxwKbbKoD0eZEu","descripcion":"asd","precio":"4"}
   //return $request->all();
   $request->all();
    //cremos un nuevo objeto de la clase Usuario
    $newProducto = new Usuario;
   // nombrel del objeto,nombre del campo DB,nombre del la entrada
    $newProducto->nombre = $request->input('name');
    $newProducto->apellidosP = $request->input('apellido_p');
    $newProducto->apellidosM = $request->input('apellido_m');
    $newProducto->rol = $request->input('rol');
    $newProducto->usuario = $request->input('username');
    $newProducto->contrasena = $request->input('password');
    $newProducto->save();

    return redirect()->route('sIndex')->with('info', 'Usuario creado exitosamente');
//con el  witch muestro un anuncio temportal y se guarda en info
   // return redirect()->route('products.index')->with('info','producto creado');
 
    }
    

}
