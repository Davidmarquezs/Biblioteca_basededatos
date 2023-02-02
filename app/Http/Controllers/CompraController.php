<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Libro;
use App\Models\User;
use App\Mail\CompraMailable;
use Illuminate\Support\Facades\Mail;
use Auth;

class CompraController extends Controller
{
    /*public function __construct(){
        $this -> middleware('auth'); 
    }*/
    
    public function show($id){
    	if(Auth::check()){
    		$libro = Libro::find($id);
       		return view('compra.compras', compact('libro'));
    	}else{
    		return redirect() -> route('login');
    	}  	
    }

    public function datos(Request $request){
		$libro = Libro::where('nombre', '=', $request->nombre)->first();
		$libro->cantidad = $libro->cantidad - $request->select2;
		$libro->save();
    	$correo = new CompraMailable($request -> all());
    	Mail::to(auth() -> user() -> email) -> send($correo);
    	return redirect() -> route('dashboard') -> with('info', 'Informacion de factura enviada');
    }
}
