<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    public function index()
    {
        // Você pode passar quaisquer dados necessários para a view aqui
        $dados = [
            'title' => 'Sobre o Projeto',
            'description' => 'Eu passei pelos seu codigo, abraço do eu do futuro'
        ];

        return view('about', $dados);
    }
}
