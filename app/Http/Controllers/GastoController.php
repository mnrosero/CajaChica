<?php

namespace CajaChica\Http\Controllers;

use Illuminate\Http\Request;
use CajaChica\TipoGasto;
use CajaChica\Imagen;
use CajaChica\Gasto;
use Illuminate\Support\Facades\Redirect;
use DB;


class GastoController extends Controller
{
	 public function __construt(){

 } 
   public function index(){
	$tipoGasto=TipoGasto::all();
	//dd($tipoGasto);
	return view('tipoGasto.index')
	->with('tipoGasto',$tipoGasto);
}

public function saveGasto(Request $request, Imagen $imagen){
	$imagen->imagen_id;
	$condicionalDescuento=$request->input('descuento');

	
   
	if ($condicionalDescuento=="SI") {
		$contador=count($_POST['nombre']);
   		$nombres=($_POST['nombre']);
 		foreach($nombres as $key=>$nombre) {
 			$gasto=new Gasto;
 	    	$gasto->NumeroCaja=1;
 	    	$gasto->FechaGasto=$request->input('fecha');
 	    	$gasto->Placa=$request->input('placa');
 	    	$gasto->Tripulacion=implode(",", $request->persona);
 			$gasto->AplicaDescuento=$request->input('descuento');
 			$descuento=$request->input('egreso');
 	 		$cantidad=$descuento/$contador;
 	 		$idGastoG=$request->input('tipoGasto');
			$idQuey =DB::select('SELECT id FROM tipogastos WHERE Detalle = ?', [$idGastoG]);
			$idGasto=$idQuey[0]->id;
 			$gasto->tipoGasto=$idGasto;
 			$gasto->caja_chica_id=1;
 			$gasto->imagen_id=1;
 			$gasto->usuario='prueba';
 			$gasto->Egreso=$cantidad;
 			$valor=$nombres[$key];
 			$gasto->PersonaDescuento=$valor;
 				//dd($gasto);
 			$gasto->save();
		}
	}elseif( ($condicionalDescuento=="NO") ){
		$gasto=new Gasto;
 	    	$gasto->NumeroCaja=1;
 	    	$gasto->FechaGasto=$request->input('fecha');
 	    	$gasto->Placa=$request->input('placa');
 	    	$gasto->Tripulacion=implode(",", $request->persona);
 			$gasto->AplicaDescuento=$request->input('descuento');
 			$gasto->Egreso=$request->input('egreso');
 			$gasto->usuario='prueba';
 			$idGastoG=$request->input('tipoGasto');
			$idQuey =DB::select('SELECT id FROM tipogastos WHERE Detalle = ?', [$idGastoG]);
			$idGasto=$idQuey[0]->id;
 			$gasto->tipoGasto=$idGasto;
 			$gasto->caja_chica_id=1;
 			$gasto->imagen_id=1;
 			$gasto->save();
 			
	}
	
 	
 		
 	
 	//return 'bien';
 	
 	
 	
 }



}
