<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/registration', [UserController::class, 'create']) -> middleware('guest') -> name('registration');
Route::post('/registration', [UserController::class, 'store']) -> middleware('guest');
Route::view('/dashboard', 'dashboard') -> middleware('auth') -> name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard', ['name' => session()->get('username')]);
});
Route::get('logout', [UserController::class, 'deletecookie'])->name('logout');
