<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;
use App\Models\Relatorio;

class PaginaInicialController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $produtos = PaginaInicial::all();

        return view('index', compact('produtos'));
    }


    //Para levar à página de relatório de produtos do Estoque

    public function relatorio()
    {
        $relatorios = Relatorio::where('tipo', 'adição')->get();
        $relatorios2 = Relatorio::where('tipo', 'remoção')->get();
        $relatorios3 = PaginaInicial::where('quantidade')->get();

        return view('relatorio', compact('relatorios', 'relatorios2', 'relatorios3'));
    }

    public function store(Request $request)
    {
        $novoProduto = new PaginaInicial();
        $novoProduto->SKU = $request->SKU;
        $novoProduto->nome = $request->nome;
        $novoProduto->quantidade = $request->quantidade;
        $novoProduto->sistema = $request->sistema;
        $novoProduto->save();

        return redirect()->route('index');
    }
}
