<?php

namespace App\Http\Controllers;

use App\Http\DataTransferObjects\RecipeDTO;
use App\Http\Services\ViewService;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function actionIndex(Request $request, ViewService $viewService)
    {

        $dto = new RecipeDTO(
            $request->user_id,
            $request->types_meals,
            $request->dishes,
            $request->cost,
        );


        return view('main_new', [
            'recipes' => $viewService->getRecipes($dto),
            'categories_selector' => $viewService->getCategoriesSelector(),
            'dishes' => $viewService->getDishes(),
            'dto' => $dto,
        ]);

    }
}
