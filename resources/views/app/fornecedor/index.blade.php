<h3> Fornecedor</h3>


 @php

// if (condition) {
//     # code...
// }elseif() {

// } else {
    
// }

    
@endphp 


@isset($fornecedores)
    
    
    @foreach ($fornecedores as $indice => $fornecedor )
        Iteração atual : {{$loop->iteration}} 
        <br>
        Fornecedor: {{$fornecedor ['nome']}}
        <br>
        Status: {{$fornecedor ['status']}}
        <br>
        CNPJ: {{$fornecedor ['CNPJ'] ?? 'Dado não foi preenchido' }}
        <br>
        telefone: ({{$fornecedor ['ddd'] ?? ''}}) {{$fornecedores ['telefone'] ?? ''}}
        <br>
        
    @if($loop->first)
        <h3><p> Primeira iteração do Loop</h3></p>
        @endif

    @if ($loop->last)
        Última iteração do loop
        <br>
        
        Total de Registros: {{$loop->count}}
       
        
    @endif
        <hr>
    @endforeach(isset($fornecedores [$i]))
@endisset




{{-- @unless (($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endunless --}}