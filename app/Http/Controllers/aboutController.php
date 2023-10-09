<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    public function index()//essa função retorna para a view em resources/views/about.blade.php
    //mas tem que definir a rota em routes/web.php
    {
        // Você pode passar quaisquer dados necessários para a view aqui
        $dados = [
            'title' => 'Sobre o Projeto',
            'description' => 'Eu passei pelos seu codigo, abraço do eu do futuro'
        ];

        return view('about', $dados);
    }
}
