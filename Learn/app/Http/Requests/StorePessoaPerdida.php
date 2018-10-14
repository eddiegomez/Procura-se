<?php

namespace Laravel_Learn\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoaPerdida extends FormRequest
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
            'nome' =>'required|max:15',
            'sexo' =>'required',
//            'data_nasc' =>'required',
            'nacionalidade' =>'required|max:15',
//            'naturalidade' =>'required|max:15',
            'foto' =>'required'

        ];
    }
}
