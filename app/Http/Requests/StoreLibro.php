<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibro extends FormRequest
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
            'name' => 'required',
            'autor' => 'required',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'name of the book',
            'categoria' => 'category'
        ];
    }
    public function message(){
        return[
            'categoria.required' => 'Autor of the book'
        ];
    }
}
