<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
	return view('welcome');
})->name('login');

Route::get('registrar',function(){
	return view('registrar');
})->name('registrar');