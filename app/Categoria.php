<?php

namespace estoqueLara;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function produtos(){
        return $this->hasMany('estoqueLara\Produto');
    }
}
