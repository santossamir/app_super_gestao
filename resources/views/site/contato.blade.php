@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
           @component('site.layouts._components.form_contato', ['class' => 'borda-preta'])
            <p>Nossa equipe estará analisando a mensagem e retornará o mais breve possível.</p>
            <p>Nosso tempo médio de retorno é de 48h.</p>
           @endcomponent
        </div>
    </div>
</div>

    <div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src={{asset('img/facebook.png')}}>
        <img src={{asset('img/linkedin.png')}}>
        <img src={{asset('img/youtube.png')}}>
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src={{asset('img/mapa.png')}}>
    </div>
</div>
@endsection
