@extends('principal')

@section('conteudo')

@if($errors->all())
<div class="alert alert-danger">
    <ul>
@foreach($errors->all() as $error)    
        <li>{{$error}}</li>    
@endforeach
    </ul>
</div>
@endif

<form action="/produtos/add" method="post">
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
        <label>Tamanho:</label>
        <input name="tamanho" class="form-control"/>
    </div>

    <div class="form-group">    
        <label>Categoria:</label>
        <select name="categoria_id" class="form-control">
            @foreach($categorias as $categ)
            <option value="{{$categ->id}}">{{$categ->nome}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">    
        <label>Descrição:</label>
        <input name="descr" class="form-control"/>
    </div>
    
    <button class="btn btn-primary" type="submit">Adicionar</button>

</form>

@stop