<?php

namespace App\Http\DataTransferObjects;


use Illuminate\Http\Request;

class RecipeDTO
{
    public function __construct(
        public $user_id,
        public $category_id,
        public $name,
        public $cost,
    ) {
    }


}
