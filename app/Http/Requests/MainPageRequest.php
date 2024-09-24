<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class MainPageRequest extends FormRequest
{
     public function rules(): array
    {
        return [
            'user_id' => 'sometimes|nullable|integer',
            'types_meals' => 'nullable|integer',
            'dishes' => 'nullable|integer',
            'cost' => 'nullable|integer',
        ];


    }

    public function messages()
    {

        return [
            'user_id.integer' => 'Поле "Рецепты пользователя" должно быть целочисленным',
            'types_meals.integer' => 'Поле "Виды приема пищи" должно быть целочисленным',
            'user_id.integer' => 'Поле "Название блюда" должно быть целочисленным',
            'cost.integer' => 'Поле "Стоимость" должно быть целочисленным',
        ];
    }
}
