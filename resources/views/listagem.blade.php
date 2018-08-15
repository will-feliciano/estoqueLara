@extends('principal')

@section('conteudo')

<div class="container">
    <h1>Produtos</h1>
    <table class="table">
        <tr>
            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Qtde</td>
            <td>Url</td>
        </tr>        
        @foreach($produtos as $prod)            
            <tr class="{{ $prod->quantidade == 1 ? 'danger' : '' }}">
                <td>{{ $prod->nome }}</td>
                <td>{{ $prod->valor }}</td>
                <td>{{ $prod->descricao }}</td>
                <td>{{ $prod->quantidade }}</td>
                <td>
                    <a href="/produtos/mostrar/{{$prod->id}}">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>            
        @endforeach   
    </table>

    @if(old('nome'))
        <div class="alert alert-sucess">
            Produto {{old('nome')}} adicionado com Sucesso!
        </div>
    @endif

</div>       

@stop
    