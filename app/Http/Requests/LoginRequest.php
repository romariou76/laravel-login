<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//Importamos esta libreria
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials(){
        $username = $this->get('username'); //obtenemos el valor username

        if ($this->isEmail($username)) {  // validamos si es un email
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }
        return $this->only('username', 'password');
    }

    // regla de validacion
    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['username' => $value], ['username' => 'email'])->fails(); // si falla, regresemos el valor opuesto con metodo 'fails'
    }
}
