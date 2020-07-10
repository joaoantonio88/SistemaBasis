<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'filial_id'=>'required',
            'nome'=>'required|max:100',
            'datanascimento'=>'required',
            'sexo'=>'required|max:20',
            'cpf'=>'required|max:15',
            'endereco'=>'required|max:100',
            'cargo'=>'required|max:40',
            'salario'=>'required|numeric',
            'situacao'=>'required',
            'senha'=>'required|max:10',
        ];
    }
}
