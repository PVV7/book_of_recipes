<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\VideoModel;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        $temp = VideoModel::all()->toArray();

        return view('auth.dashboard');
    }
}
