<?php

namespace App\Http\DataTransferObjects;

class RecipeDTO
{
    public function __construct(
        public int|null $user_id,
        public int|null $types_meals,
        public int|null $dishes,
        public int|null $cost,
    ) {
    }


}
