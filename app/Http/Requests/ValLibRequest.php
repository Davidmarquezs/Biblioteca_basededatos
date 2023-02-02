<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValLibRequest extends FormRequest
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
            'codigo'      => 'string|regex:/[LIB]/|regex:/[0-9]/|starts_with:LIB|min:6|max:999',
            'nombre'      => 'string|max:100',
            //'categoria'   => 'required|max:32',
            'isbn'        => 'min:10|max:13|regex:/[0-9]/',
            'cantidad'    => 'regex:/[0-9]/|integer',
            'precio'      => 'regex:/[0-9]/',
            'imagen'      => 'nullable|mimes:jpeg,png,jpg'
        ];
    }
}
