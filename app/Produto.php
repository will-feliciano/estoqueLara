<?php

namespace estoqueLara;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //protected $table = 'produtos'; //customizar tabela vinculada a classe
    public $timestamps = false; //deixar de salvar os campos de validação de datas de criação e atualização

    protected $fillable = array('nome', 'descricao', 'quantidade', 'valor', 'tamanho', 'categoria_id'); //controle dos campos de salvamento 

    public function categoria(){
        return $this->belongsTo('estoqueLara\Categoria');
    }
}
