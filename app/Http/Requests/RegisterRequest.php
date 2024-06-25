<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class RegisterRequest extends FormRequest
{
     public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:3',
        ];


    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'Поле "Имя" не должно быть пустым',
                'string' => 'Поле "Имя" должно быть строкового типа',
            ],
            'email' => [
                'required' => 'Поле "E-mail" не должно быть пустым',
                'string' => 'Поле "E-mail" должно быть строкового типа',
                'email' => 'Поле "E-mail" не удовлетворяет формату почты',
                'unique' => 'На данную почту уже зарегистрирован аккаунт',
            ],
            'password' => [
                'required' => 'Поле "Пароль" не должно быть пустым',
                'confirmed' => 'Пароль не совпадает с паролем на подтверждение',
                'min' => 'Минимальная длина пароля равна 3 символам',
            ],
        ];
    }
}
