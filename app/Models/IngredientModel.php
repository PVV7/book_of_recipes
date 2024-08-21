<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientModel extends Model
{
    use HasFactory;

    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'ingredients';

    public function shopList(): BelongsTo
    {
        return $this->belongsTo(ShopListModel::class);
    }

    public function recipes(): BelongsTo
    {
        return $this->belongsToMany(RecipeModel::class, 'recipes-ingredients', 'ingredient_id', 'recipe_id');
    }
}
