<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaRequest extends FormRequest
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
			'puesto' => 'required|string',
			'empresa' => 'required|string',
			'descripcion' => 'required|string',
			'fecha_inicio' => 'required|date|date_format:d-m-Y',
            'fecha_fin' => 'date|after:fecha_inicio|nullable|date_format:d-m-Y'
        ];
    }
}
