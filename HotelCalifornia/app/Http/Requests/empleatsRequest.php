<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class empleatsRequest extends FormRequest
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
                'DNI' => 'required | max:255',
                'phone' => 'required | max:255',
                'departament_id' => 'required | max:255',
                ];
            }  
    public function attributes() {
        return [
                'name' => 'name',
                'last_name' => 'last_name',
                'DNI' => 'DNI',
                'phone' => 'phone',
                'departament_id' => 'departament_id',
              
            ];
    }
    
    public function messages(){
        return [
                "name" => "El :attribute es un parametro requerido",
                "last_name" => "El :attribute es un parametro requerido",
                "DNI" => "El :attribute es un parametro requerido",
                "phone" => "El :attribute es un parametro requerido",
                'departament_id' => "El :attribute es un parametro requerido",
             
            ];
           
        }
}
