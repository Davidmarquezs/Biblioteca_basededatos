<?php

namespace App\Http\Controllers;

use App\Mail\CompraMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /*public function index() {
    	return view('contacto.index');
    }

    public function store(Request $request) {
    	$correo = new CompraMailable($request -> all());
    	Mail::to('vera.950b@gmail.com') -> send($correo);
    	return redirect() -> route('contacto.index') -> with('info', 'Mensaje Enviado');
    }*/
}
