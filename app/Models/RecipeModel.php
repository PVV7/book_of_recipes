<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RecipeModel extends Model
{
    use HasFactory;


    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'recipes';

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(RecipeModel::class, 'recipes-ingredients', 'ingredient_id', 'recipe_id');
    }


    public function video(): HasMany
    {
        return $this->hasMany(VideoModel::class);
    }

    public function image(): HasMany
    {
        return $this->hasMany(ImageModel::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
