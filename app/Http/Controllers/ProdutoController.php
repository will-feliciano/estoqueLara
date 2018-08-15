<?php namespace estoqueLara\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller{

    public function listar(){
        $Produtos = DB::select('select * from produtos');
        
        return view('listagem')->with('produtos', $Produtos);     
    }

    public function mostrar(){
        $id = Request::route('id');
        $Produto = DB::select('select * from produtos where id = ?', [$id]);

        return view('detalhes')->with('prod', $Produto[0]);
    }

    public function novo(){
        return view('form');
    }

    public function add(){

        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descr');            
        $quantidade = Request::input('qtde');

        DB::insert('insert into produtos values (null, ?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));

        return redirect('/produtos')->withInput();
    }

}