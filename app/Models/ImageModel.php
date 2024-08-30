<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property string alt
 * @property string path
 * @property int recipe_id
 */

class ImageModel extends Model
{
    use HasFactory;

    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'images';

    public function recipe()
    {
        return $this->belongsTo(RecipeModel::class);
    }
}
