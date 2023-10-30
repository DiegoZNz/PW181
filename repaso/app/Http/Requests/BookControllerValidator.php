<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookControllerValidator extends FormRequest
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
            //validación corregida con el uso de digits para el isbn que solo sean 13 dígitos, ni más ni menos.
            'txtIsnb' => 'required|numeric|digits:13',
            'txtTitle' => 'required',
            'txtAuthor' => 'required',
            'txtPages' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtEmailEditorial' => 'required|email',
            
        ];
    }
}
