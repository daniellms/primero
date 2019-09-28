<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMensajesRequest extends FormRequest
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
        // aca pongo las reglas q tiene q tener el formulario si o si para procesar el request lo llamo en controlador de mensajes
        return [
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ];
    }
}
