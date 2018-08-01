<?php

namespace CajaChica\Http\Controllers;

use Illuminate\Http\Request;
use CajaChica\Imagen;
use Illuminate\Support\Facades\Redirect;
use CajaChica\Http\Redirect\ImagenFormRequest;
use DB;
use Storage;

class ImagenController extends Controller
{
 public function __construt(){

 }   



 public function store(Request $request){
 	$imagen=new Imagen;
 	 $date = new \DateTime();;  
 	$path = $request->imagen->store('public');
 	$imagen->user='prueba';
    $path = explode('/',$path);
    $path = $path[1];
 	$imagen->ruta=$path;
 	$imagen->fecha=$date;
 	$imagen->save();
 	return back();
 }

public function index(){
	$imagen=Imagen::all();
	//dd($imagen);
	return view('imagen.listaImagen')
	->with('imagen',$imagen);
}

}
