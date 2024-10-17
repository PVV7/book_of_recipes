<?php

namespace App\MoonShine\Resources;

use App\Models\RecipeModel;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipes;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class RecipesResource extends Resource
{
	public static string $model = RecipeModel::class;

	public static string $title = 'Рецепты';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
