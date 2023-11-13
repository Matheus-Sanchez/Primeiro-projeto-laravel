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
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
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



use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');

//exibir o formulário de edição de um post existente
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
//excluir um post 
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
//exibir um post
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
/*
use App\Http\Controllers\ProductsListController;

Route::get('/', [ProductsListController::class, 'index'])->name('ProductsList.index');
Route::get('/ProductsList/create', [ProductsListController::class, 'create'])->name('ProductsList.create');
Route::post('/ProductsList', [ProductsListController::class, 'store'])->name('ProductsList.store');

//exibir o formulário de edição de um post existente
Route::get('/ProductsList/{id}/edit', [ProductsListController::class, 'edit'])->name('ProductsList.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/ProductsList/{id}', [ProductsListController::class, 'update'])->name('ProductsList.update');
//excluir um post 
Route::delete('/ProductsList/{id}', [ProductsListController::class, 'destroy'])->name('ProductsList.destroy');
//exibir um post
Route::get('/ProductsList/{id}', [ProductsListController::class, 'show'])->name('ProductsList.show');

use App\Http\Controllers\ProductsCartController;

Route::get('/', [ProductsCartController::class, 'index'])->name('ProductsCart.index');
Route::get('/ProductsCart/create', [ProductsCartController::class, 'create'])->name('ProductsCart.create');
Route::post('/ProductsCart', [ProductsCartController::class, 'store'])->name('ProductsCart.store');

//exibir o formulário de edição de um post existente
Route::get('/ProductsCart/{id}/edit', [ProductsCartController::class, 'edit'])->name('ProductsCart.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/ProductsCart/{id}', [ProductsCartController::class, 'update'])->name('ProductsCart.update');
//excluir um post 
Route::delete('/ProductsCart/{id}', [ProductsCartController::class, 'destroy'])->name('ProductsCart.destroy');
//exibir um post
Route::get('/ProductsCart/{id}', [ProductsCartController::class, 'show'])->name('ProductsCart.show');

use App\Http\Controllers\WishlistController;

Route::get('/', [WishlistController::class, 'index'])->name('Wishlist.index');
Route::get('/Wishlist/create', [WishlistController::class, 'create'])->name('Wishlist.create');
Route::post('/Wishlist', [WishlistController::class, 'store'])->name('Wishlist.store');

//exibir o formulário de edição de um post existente
Route::get('/Wishlist/{id}/edit', [WishlistController::class, 'edit'])->name('Wishlist.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/Wishlist/{id}', [WishlistController::class, 'update'])->name('Wishlist.update');
//excluir um post 
Route::delete('/Wishlist/{id}', [WishlistController::class, 'destroy'])->name('Wishlist.destroy');
//exibir um post
Route::get('/Wishlist/{id}', [WishlistController::class, 'show'])->name('Wishlist.show');

use App\Http\Controllers\ShoppingCartController;

Route::get('/', [ShoppingCartController::class, 'index'])->name('ShoppingCart.index');
Route::get('/ShoppingCart/create', [ShoppingCartController::class, 'create'])->name('ShoppingCart.create');
Route::post('/ShoppingCart', [ShoppingCartController::class, 'store'])->name('ShoppingCart.store');

//exibir o formulário de edição de um post existente
Route::get('/ShoppingCart/{id}/edit', [ShoppingCartController::class, 'edit'])->name('ShoppingCart.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/ShoppingCart/{id}', [ShoppingCartController::class, 'update'])->name('ShoppingCart.update');
//excluir um post 
Route::delete('/ShoppingCart/{id}', [ShoppingCartController::class, 'destroy'])->name('ShoppingCart.destroy');
//exibir um post
Route::get('/ShoppingCart/{id}', [ShoppingCartController::class, 'show'])->name('ShoppingCart.show');

use App\Http\Controllers\ClientController;

//Route::get('/', [ClientController::class, 'index'])->name('Client.index');
Route::get('/Client/create', [ClientController::class, 'create'])->name('Client.create');
Route::post('/Client', [ClientController::class, 'store'])->name('Client.store');

//exibir o formulário de edição de um post existente
Route::get('/Client/{id}/edit', [ClientController::class, 'edit'])->name('Client.edit');
//processar a submissão do formulário de edição e atualizar um post existente
Route::put('/Client/{id}', [ClientController::class, 'update'])->name('Client.update');
//excluir um post 
Route::delete('/Client/{id}', [ClientController::class, 'destroy'])->name('Client.destroy');
//exibir um post
Route::get('/Client/{id}', [ClientController::class, 'show'])->name('Client.show');
*/