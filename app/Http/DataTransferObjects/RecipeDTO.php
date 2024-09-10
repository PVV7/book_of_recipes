<?php

namespace App\Http\DataTransferObjects;

class RecipeDTO
{
    public function __construct(
        public int|null $user_id,
        public int|null $category_id,
        public int|null $name,
        public int|null $cost,
    ) {
    }


}
