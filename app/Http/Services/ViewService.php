<?php

namespace App\Http\Services;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\RecipeDTO;
use App\Models\CategoryModel;
use App\Models\ImageModel;
use App\Models\RecipeModel;
use MoonShine\Tests\Fixtures\Models\Category;


class ViewService
{
    public function getRecipes(RecipeDTO $dto)
    {

        $recipes = RecipeModel::query()
            ->with('image')
            ->when($dto->user_id, function($query, $value){
                $query->where('user_id', $value);
            })
            ->when($dto->category_id, function($query, $value){
                $query->where('category_id', $value);
            })
            ->when($dto->cost, function ($query, $value){
                $query->where('cost', '<=' ,$value);
            })
            ->when($dto->name, function ($query, $value){
                $query->where('name', 'like', '%'.$value.'%');
            })
            ->get()
            ->map(fn($item) => [
                'name' => $item->name,
                'title' => $item->title,
                'image' => $item->image->pluck('path'),
                'cost' => $item->cost,
            ]);


        return $recipes;
    }

    public function getCategoriesSelector()
    {
        //добавить нулевоке знаение для "все"
        $categories = CategoryModel::query()
            ->get(['id', 'name'])
            ->map(fn($item) => [
                'id' => $item->id,
                'name' => $item->name,
            ]);

        return $categories;
    }

}
