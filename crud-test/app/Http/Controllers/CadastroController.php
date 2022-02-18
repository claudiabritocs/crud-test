<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;

class CadastroController extends Controller
{
    public function index() 
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        try {

            $novoProduto = new PaginaInicial();
            $novoProduto->SKU = $request->SKU;
            $novoProduto->nome = $request->nome;
            $novoProduto->quantidade = $request->quantidade;
            $novoProduto->sistema = $request->sistema;
            $novoProduto->save();

            return redirect()->route('index');

        } catch (\Exception $e) {

            return view('errorsku');
        }

    }
}
