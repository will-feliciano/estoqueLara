@extends('principal')

@section('conteudo')

<div class="container">
    <h1>Produto {{ $prod->nome }}</h1>    

    <ul>
        <li>
            Valor: R$ {{ $prod->valor }}
        </li>
        <li>
            Descrição: {{ $prod->descricao or 'Não tem Texto!' }}
        </li>
        <li>
            Quantidade em estoque: {{ $prod->quantidade }}
        </li>
    </ul>
</div> 

@stop