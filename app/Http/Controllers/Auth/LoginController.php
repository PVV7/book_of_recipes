<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function actionIndex()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {

        $isRemember = $request->boolean('remember');
        // если пользователь не прошел аутентификацию
        if(!Auth::attempt($request->only('email', 'password'), $isRemember)){

            //более правильная версия вывода сообщения об ошибке
            throw ValidationException::withMessages([
                    'email' => 'Неверно указаны учетные данные.',
            ]);
        }

        //новая сессия для аутентифицированного пользователя
        $request->session()->regenerate();

        // перенаправление на страничку, которую выбрал пользователь после аутентификации
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request)
    {
        //удаляем текущую сессию пользователя
        Auth::logout();

        //генерируем новый идентификатор для сессии пользователя
        $request->session()->invalidate();

        //генерируем новый csrf токен
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
