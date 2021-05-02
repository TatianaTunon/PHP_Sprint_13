<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reservasRequest extends FormRequest
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
            'name' => 'required | max:255',
            'last_name' => 'required | max:255',
            'phone' => 'required | max:255',
            'date_entrada' => 'required | max:255',
            'date_salida' => 'required | max:255',
            'number_room' => 'required | max:255',
            ];
        }
    public function attributes() {
        return [
            'name' => 'name',
            'last_name' => 'last_name',
            'phone' => 'phone',
            'date_entrada' => 'date_entrada',
            'date_salida' => 'date_salida',
            'number_room' => 'number_room',
        ];
    }

    public function messages(){
        return [
            "name" => "El :attribute es un parametro requerido",
            "last_name" => "El :attribute es un parametro requerido",
            "phone" => "El :attribute es un parametro requerido",
            "date_entrada" => "El :attribute es un parametro requerido",
            "date_salida" => "El :attribute es un parametro requerido",
            "number_room" => "El :attribute es un parametro requerido",
        ];
       }
}
