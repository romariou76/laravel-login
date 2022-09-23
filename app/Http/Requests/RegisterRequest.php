<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determinar si el usuario está autorizado para realizar esta solicitud.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtenga las reglas de validación que se aplican a la solicitud.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //Vamos a validar si cada uno de los campos cumplen con ciertos requisitos
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'roles_id' => 'nullable',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
