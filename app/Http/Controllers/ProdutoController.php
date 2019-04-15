<?php namespace estoqueLara\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoqueLara\Produto;
use estoqueLara\Categoria;
use estoqueLara\Http\Requests\ProdutoValidator;

class ProdutoController extends Controller{

    public function listar(){
        //$Produtos = DB::select('select * from produtos');
        $Produtos = Produto::all();
        return view('listagem')->with('produtos', $Produtos);     
    }

    public function mostrar($id){
        //$Produto = DB::select('select * from produtos where id = ?', [$id]);
        $Produto = Produto::find($id);
        return view('detalhes')->with('prod', $Produto);
    }

    public function remover($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/produtos');
    }

    public function novo(){
        return view('form')->with('categorias', Categoria::all());
    }

    public function add(ProdutoValidator $request){
    /* 
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descr');            
        $quantidade = Request::input('qtde');

        DB::insert('insert into produtos values (null, ?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));
    */
        $dados = $request->all(); 

        $dados['descricao'] = $dados['descr'];
        $dados['quantidade'] = $dados['qtde'];
        
        unset($dados['descr']);
        unset($dados['qtde']);

        //dd($dados);
        //exit;        

        $produto = new Produto($dados);
        
        $produto->save();

        //Produto::create(Request::all());

        return redirect('/produtos')->withInput();
    }

}