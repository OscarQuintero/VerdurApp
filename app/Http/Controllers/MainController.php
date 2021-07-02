<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mostrarCatalogo(){
    	return view('catalogo');
    }
    public function mostrarProductores(){
    	return view('listaproductores');
    }
    public function mostrarAcercaDe(){
    	return view('about');
    }
    public function mostrarLogIn(){
    	return view('login');
    }
    public function mostrarSignUp(){
    	return view('signup');
    }
   
}
