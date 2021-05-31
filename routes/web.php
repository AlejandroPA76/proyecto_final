<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/',function(){
	return view('cliente.c_index');
})->name('login');

Route::get('login',function(){
	return view('login');
})->name('login');

Route::get('registrar','App\Http\Controllers\Micontrolador@cRegistrar')->name('registrar');

Route::get('supervisor_menu_usuarios','App\Http\Controllers\Micontrolador@showEmpleadosSu')->name('sIndex');

Route::get('supervisorCrearUsuario','App\Http\Controllers\Micontrolador@crearSuEmpleado')->name('sCrear');

Route::post('productos', 'App\Http\Controllers\Micontrolador@subirSuEmpleado')->name('registrarEmpleado');

Route::post('login',function(){ 
 
return request()->only('username','password');

})->name('post-login');
