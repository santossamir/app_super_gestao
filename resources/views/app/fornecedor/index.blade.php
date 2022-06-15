<h3>Fornecedor</h3>


{{--@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem fornecedores cadastrados.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados.</h3>
@endif --}}

Fornecedor: {{ $fornecedores[1]['nome']}}
<br>
Status: {{ $fornecedores[1]['status']}}
<br>
@isset($fornecedores[1]['CNPJ'])
    CNPJ: {{ $fornecedores[1]['CNPJ']}}
    @empty($fornecedores[1]['CNPJ'])
        -Vazio
    @endempty
@endisset
<br>

@if($fornecedores[0]['status'] == 'N')
    <h4>Fornecedor inativo.</h4>
@else
    <h4>Fornecedor ativado!</h4>
@endif