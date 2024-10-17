<?php

namespace App\MoonShine\Resources;

use App\Models\CategoryModel;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

use MoonShine\Decorations\Block;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Actions\FiltersAction;

class CategoriesResource extends Resource
{
	public static string $model = CategoryModel::class;

	public static string $title = 'Категории';

    public string $titleField = 'name';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Block::make('Основная информация', [
                Text::make('Название категории', 'name')->sortable()->required(),
            ]),
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
