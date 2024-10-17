<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'bem vindo';
// });
//'PrincipalController@principal'



Route::get('/', [PrincipalController::class, 'principal'])->name('site.home');
Route::get('/sobre-nos', [PrincipalController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [PrincipalController::class, 'contato'])->name('site.contato');
Route::get('/login', [PrincipalController::class, 'login'])->name('site.login');




Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() { return 'Clientes'; }) ->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class,('index')])->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});


  



Route::fallback(function(){
    echo 'A rota acessada não esxiste.<a href="'.route('site.home').'"> clique aqui</a> para ir a página inicial.';

});


