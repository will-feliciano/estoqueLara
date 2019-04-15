<?php

namespace estoqueLara\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'qtde' => 'required|numeric',
            'valor' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'required' => 'O :attribute é Obrigatório!',
            'numeric' => 'O valor de :attribute deve ser numérico!'
        ];
    }
}
