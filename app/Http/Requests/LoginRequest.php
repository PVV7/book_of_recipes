<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class LoginRequest extends FormRequest
{
     public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];


    }

    public function messages()
    {
        return [
            'email' => [
                'required' => 'Поле "E-mail" не должно быть пустым',
                'string' => 'Поле "E-mail" должно быть строкового типа',
                'email' => 'Поле "E-mail" не удовлетворяет формату почты',
            ],
            'password' => [
                'required' => 'Поле "Пароль" не должно быть пустым',
                'string' => 'Поле "Пароль" должно быть строкового типа',
            ],
        ];
    }
}
