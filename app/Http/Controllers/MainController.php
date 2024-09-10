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
            $request->category_id,
            $request->name,
            $request->cost,
        );


        return view('main_new', [
            'recipes' => $viewService->getRecipes($dto),
            'categories_selector' => $viewService->getCategoriesSelector()
        ]);
    }
}
