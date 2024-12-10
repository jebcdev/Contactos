<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dni' => [
                'required',
                'string',
                'min:5',
                'max:100',
                Rule::unique('contacts', 'dni')->ignore($this->contact),
            ],
            'name' => ['required', 'string', 'min:5', 'max:100'],
            'surname' => ['required', 'string', 'min:5', 'max:100'],
            'phone' => ['required', 'string', 'min:5', 'max:100'],
        ];
    }

    /**
     * Get custom messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // Mensajes para 'dni'
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.string' => 'El DNI debe ser una cadena de texto válida.',
            'dni.min' => 'El DNI debe tener al menos 5 caracteres.',
            'dni.max' => 'El DNI no puede tener más de 100 caracteres.',
            'dni.unique' => 'El DNI ingresado ya está registrado.',

            // Mensajes para 'name'
            'name.required' => 'El campo Nombre es obligatorio.',
            'name.string' => 'El Nombre debe ser una cadena de texto válida.',
            'name.min' => 'El Nombre debe tener al menos 5 caracteres.',
            'name.max' => 'El Nombre no puede tener más de 100 caracteres.',

            // Mensajes para 'surname'
            'surname.required' => 'El campo Apellido es obligatorio.',
            'surname.string' => 'El Apellido debe ser una cadena de texto válida.',
            'surname.min' => 'El Apellido debe tener al menos 5 caracteres.',
            'surname.max' => 'El Apellido no puede tener más de 100 caracteres.',

            // Mensajes para 'phone'
            'phone.required' => 'El campo Teléfono es obligatorio.',
            'phone.string' => 'El Teléfono debe ser una cadena de texto válida.',
            'phone.min' => 'El Teléfono debe tener al menos 5 caracteres.',
            'phone.max' => 'El Teléfono no puede tener más de 100 caracteres.',
        ];
    }
}
