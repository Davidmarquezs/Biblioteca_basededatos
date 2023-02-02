<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
            'codigo'      => 'required|string|regex:/[LIB]/|regex:/[0-9]/|starts_with:LIB|min:6|max:12|unique:libros',
            'nombre'      => 'required|string|max:100',
            //'categoria'   => 'required|max:32',
            'isbn'        => 'required|min:10|max:13|regex:/[0-9]/',
            'cantidad'    => 'required|regex:/[0-9]/|integer',
            'precio'      => 'required|regex:/[0-9]/',
            'imagen'      => 'required|mimes:jpeg,png,jpg'
        ];
    }
}
