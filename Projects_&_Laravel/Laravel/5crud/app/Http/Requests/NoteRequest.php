<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * Esto indica cuando se va a permitir que se utilize esta petición.
     * Por ejemplo si queremos autorizar a que el usuario haga una petición. Si es admi puede, sino nel pastel
     */
    public function authorize(): bool
    {
        return true; // Ya que lo puede hacer cualquiera
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * Array que contiene las reglas
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:255|min:3'
        ];
    }
}
