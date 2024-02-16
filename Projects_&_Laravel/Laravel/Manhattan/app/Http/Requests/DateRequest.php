<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'doctor_user_id' => 'required|integer',
            'patient_user_id' => 'required|integer',
            'date' => 'required|date',
            'time' => "required|date_format:H:i:s",
            'link' => 'nullable|string',
            'motive' => 'required|string|min:3'
        ];
    }
}
