<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\File;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // WARNING: Ver quienes pueden hacer estas peticiones...
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        //     'rol' => 'required|integer',
        //     'name' => 'required|string|max:50|min:1',
        //     'first_last_name' => 'required|string|max:50|min:1',
        //     'second_last_name' => 'nullable|string|max:50|min:1',
        //     'email' => 'required|email|min:1|unique:users,email',
        //     'password' => 'required|string|min:5',
        //     'phone' => 'required|integer|unique:users,phone',
        //     'sex' => 'required|string',
        //     'age' => 'required|integer',
        //     'date_of_birth' => 'required|date',
        //     'link_photo' => 'nullable|string'
        ];
        // $rules = [
        //     'rol' => 'required|integer',
        //     'name' => 'required|string|max:50|min:1',
        //     'first_last_name' => 'required|string|max:50|min:1',
        //     'second_last_name' => 'nullable|string|max:50|min:1',
        //     'password' => 'required|string|min:5',
        //     'sex' => 'required|string',
        //     'age' => 'required|integer',
        //     'date_of_birth' => 'required|date',
        //     // 'link_photo' => 'nullable|string',
        //     'link_photo' => ['nullable', File::image()->max(10 * 1024)],
        // ];

        // if ($this->isMethod('post')) {
        //     // Aplicar reglas adicionales para la creación
        //     $rules['email'] = 'required|email|min:1|unique:users,email';
        //     $rules['phone'] = 'required|integer|unique:users,phone';
        // }

        // return $rules;
    }
}
