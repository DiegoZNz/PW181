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
            //necesito validaciones para ISBN- validación de solo números, Mínimo 13 números Páginas- validación de solo números Email de Editorial- validación de formato de correo
            'txtIsnb' => 'required|numeric|min:13',
            'txtTitle' => 'required',
            'txtAuthor' => 'required',
            'txtPages' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtEmailEditorial' => 'required|email',
        ];
    }
}
