<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //Função para listar todos os posts.
public function index(){
    //Recupera todos os posts do banco de dados
    $posts = Post::all();
    //Retorna uma view que lista os posts
    return view('posts.index', ['posts' => $posts]);
  }

  //Função para exibir o formulário de criação de post
public function create(){
    //Retorna uma view que contém o formulário de criação.
    return view('posts.create');
  }

  //Função para processar a submissão do formulário de criação
public function store(Request $request){
    //Cria uma nova postagem no banco de dados com base nos dados fornecidos.
    Post::create([
        'title' => $request->input('title'),
        'content' => $request->input('content')
    ]);
 
     // Redireciona para a página de listagem
     return redirect()->route('posts.index');
 }






 // agora criar as funçoes para as rotas que foram definidar em web.php

 
 //Função para exibir o formulário de edição de uma postagem existente
public function edit($id){
    //Recebe o ID da postagem a ser editada como parâmetro
    $post = Post::findOrFail($id);
    //Retorna uma view que contém o formulário de edição preenchido com os dados
    return view('posts.edit', compact('post'));
}


//Função para processar a submissão do formulário de edição
public function update(Request $request, $id){
    //Recebe o ID da postagem a ser atualizada como parâmetro
    $post = Post::findOrFail($id);
    
    //Atualiza os dados da postagem no banco de dados com base nos dados fornecidos
    $post->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);
    
    //Redireciona o usuário para a listagem de posts
    return redirect(route('posts.index'));
}


//Função para processar a exclusão de uma postagem
public function destroy($id){
    //Recebe o ID da postagem a ser excluída como parâmetro
    $post = Post::findOrFail($id);
    //Exclui a postagem do banco de dados
    $post->delete();
    //Redireciona o usuário para a listagem de posts
    return redirect(route('posts.index'));
}


//Função para exibir o conteúdo completo de uma postagem
public function show($id){
    //Recebe o ID da postagem a ser visualizada como parâmetro
    $post = Post::findOrFail($id);
    //Retorna uma view que exibe o conteúdo completo da postagem
    return view('posts.show', compact('post'));
}



}
