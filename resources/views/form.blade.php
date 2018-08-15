@extends('principal')

@section('conteudo')

<form action="/produtos/add" method="post" class="container">
    <h1>Novo Produto</h1>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <div class="form-group">    
        <label>Nome:</label>
        <input name="nome" class="form-control"/>
    </div>

    <div class="form-group">    
        <label>Valor:</label>
        <input name="valor" class="form-control"/>
    </div>

    <div class="form-group">    
        <label>Quantidade:</label>
        <input name="qtde" class="form-control"/>
    </div>

    <div class="form-group">    
        <label>Descrição:</label>
        <input name="descr" class="form-control"/>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>

</form>

@stop