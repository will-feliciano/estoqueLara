<?php namespace estoqueLara\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

    public function Listar(){

        $Produtos = DB::select('select * from Produto');
        dd($Produtos);
        exit;
    }

}