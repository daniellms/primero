<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarUsuarioRequest extends FormRequest
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
        //dd($this->route('usuario')); muestra lo del requeste
        return [
            'name' => 'required', // solicita nombra, valida q el campo no este vacio
            'email' => 'required|unique:users,email,'.$this->route('usuario')// valida el correo del usuario actual, permite modificar, pero no a un correo ya existente
        ];
    }
}
