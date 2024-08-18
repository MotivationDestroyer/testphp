<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Hash;

/* 
создал свой контролеер, тут происходит обработка запроса на "ссылку" testphp/registration

Метод create возвращает страницу registration из view

Функция store() принимает объект класса Request, который содержит все данные запроса (например, параметры формы).
С помощью объекта Request, если мы его укажем в качестве параметра этого метода, то laravel при выполнении этого метода автоматом передаст данные
объекта Reqest этому методу. Тяжело....)
Затем с помощью метода all() эти данные выводятся на экран (для этого используется функция dd() — «dump and die»,
которая выводит значение переданного ей аргумента и прерывает выполнение скрипта).

Код проверяет какие данные будут отправлены.
*/
class UserController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request->newPassword)
        ]);
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
