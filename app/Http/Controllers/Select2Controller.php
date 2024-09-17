<?php

namespace App\Http\Controllers;

use App\Http\Services\ViewService;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    public function index(ViewService $viewService){
        return view('select2', [
            'dishes' => $viewService->getDishes(),
        ]);
    }
}
