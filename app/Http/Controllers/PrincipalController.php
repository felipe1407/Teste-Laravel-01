<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');
    }

    public function sobrenos(){
        return view('site.sobre-nos');
    }

    public function contato(){
        return view('site.contato');
    }

    // public function clientes(){
    //     return view('site.clientes');
    // }

    // public function fornecedores(){
    //     return view('site.forncedores');
    // }

    // public function produtos(){
    //     return view('site.produtos');
    // }



}
