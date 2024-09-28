<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorsCreateRequest extends FormRequest
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
            "name" => "required|min:3|max:20",
            "surname" => "required|min:3|max:20",
            "email" => "required|min:10|max:50|email",
            "phone" => "required|min:10|max:11",
            "password" => "required|min:6|max:20",
            "confirmation" => "required|min:6|max:20|same:password",
        ];
    }
    public function attributes()
    {
        return [
            "name" => "Ad",
            "surname" => "Soyad",
            "email" => "Email",
            "password" => "Şifre",
            "confirmation" => "Şifre Tekrarı",
            "phone" => "Telefon",
        ];
    }
}
