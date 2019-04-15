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

<form action="/login" method="post">
    <h1>Login</h1>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <div class="form-group">    
        <label>Email:</label>
        <input name="email" class="form-control"/>
    </div>

    <div class="form-group">    
        <label>Senha:</label>
        <input name="senha" type="password" class="form-control"/>
    </div>
    
    <button class="btn btn-primary" type="submit">Login</button>

</form>

@stop