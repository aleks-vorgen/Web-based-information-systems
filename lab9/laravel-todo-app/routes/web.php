<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todos', TodoController::class);
Route::get('todos/{todo}', [todoController::class, 'destroy'])->name('todos.destroy');

Route::resource('countries', CountryController::class);

Route::get('auth/login', [AuthenticationController::class, 'login'])->name('auth.login');
Route::post('auth/doLogin', [AuthenticationController::class, 'doLogin'])->name('auth.doLogin');
Route::get('auth/registration', [AuthenticationController::class, 'registration'])->name('auth.registration');
Route::post('auth/register', [AuthenticationController::class, 'doRegister'])->name('auth.doRegister');
