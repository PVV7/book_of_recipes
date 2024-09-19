<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'user_id' => 'nullable|integer',
            'types_meals' => 'nullable|integer',
            'dishes' => 'nullable|integer',
            'cost' => 'nullable|integer'
        ];

    }

    public function messages()
    {
        return [
            'user_id' => [
                'integer' => 'Поле "Рецепты пользователей" должно быть числовым',
            ],
            'types_meals' => [
                'integer' => 'Поле "Виды приема пищи" должно быть числовым',
            ],
            'dishes' => [
                'integer' => 'Поле "Названия блюда" должно быть числовым',
            ],
            'cost' => [
                'integer' => 'Поле "Стоимость" должно быть числовым',
            ],
        ];
    }
}
