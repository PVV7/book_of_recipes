<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function actionIndex()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        // если пользователь не прошел аутентификацию
        if(!Auth::attempt($request->only('email', 'password'))){
        // возвращаем пользователя обратно / сохраняем введенный E-mail / выводим ошибку
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'Неверно указаны учетные данные.',
                ]);
        }

        return redirect()->route('dashboard');
    }
}
