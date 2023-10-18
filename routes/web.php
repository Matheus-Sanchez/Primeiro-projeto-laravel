<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


/*Route::get(), Route::post(), Route::put()
esses sao os metodos laravel para definir as rotas da sua aplicaçã*/


Route::get('/home', [HomeController::class, 'index']); 
Route::post('/login', [AuthController::class, 'login']);
//rota da view about.blade.php
Route::get('/about', [AboutController::class, 'index']);

//rotas do arquivo Post
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

//exibir o formulário de edição de um post existente
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
//excluir um post 
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
//exibir um post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');



