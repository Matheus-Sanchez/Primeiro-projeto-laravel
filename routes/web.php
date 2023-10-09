<?php

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

/*Route::get(), Route::post(), Route::put()
esses sao os metodos laravel para definir as rotas da sua aplicaçã*/


Route::get('/home', [HomeController::class, 'index']); 
Route::post('/login', [AuthController::class, 'login']);
//rota da view about.blade.php
Route::get('/about', [AboutController::class, 'index']);