<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'CNPJ' => '00000.000.00-00',
                'ddd' => '11',
                'telefone' => '0000-0000'],
        
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S', 
                'CNPJ' => null,
                'ddd' => null,
                'telefone' => '9999-0000'],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S', 
                'CNPJ' => null,
                'ddd' => '51',
                'telefone' => '9999-0100'] ];
                
            
            return view('app.fornecedor.index', compact('fornecedores'));
 }
}

$msg = isset($fornecedores[0]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não obrigatório';

