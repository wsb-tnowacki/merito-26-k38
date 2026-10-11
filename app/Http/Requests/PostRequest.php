<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class PostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tytul' => ["required","min:3","max:200"],
            'autor' => "required|min:2|max:100",
            'email' => "required|email:dns,rfc|max:200",
            'tresc' => "required|min:5"
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            'required' => "Pole :attribute jest wymagane",
            'min' => "Minimalna ilość znaków dla pola :attribute wynosi: :min",
            'max' => "Maksymalna ilość znaków dla pola :attribute wynosi: :max",
            'email' => "Adres email jest nieprawidłowy"
        ];
    }
}
