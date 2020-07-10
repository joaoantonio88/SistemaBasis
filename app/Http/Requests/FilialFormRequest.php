<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilialFormRequest extends FormRequest
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
          'nome'=>'required|100',
          'endereco'=>'required|max:100',
          'ie'=>'required|max:30',
          'cnpj'=>'required|max:16',
        ];
    }
}
