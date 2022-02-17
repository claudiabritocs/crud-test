<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;
use App\Models\Relatorio;
use App\Models\Calendario;

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
        $consulta = Calendario::where('created_at', 'LIKE', '%')->get();
        $dia1 = $consulta[0]->dia;


        // SELECT * FROM relatorio WHERE tipo LIKE '%remoção%' AND nome LIKE 'Medkit';
        $relatorios = Relatorio::where('tipo', 'adição')->where('created_at', 'LIKE', "%$dia1%")->get();

        $relatorios2 = Relatorio::where('tipo', 'remoção')->where('created_at', 'LIKE', "%$dia1%")->get();
        $relatorios3 = PaginaInicial::where('quantidade', '<', 100)->get();

        return view('relatorio', compact('relatorios', 'relatorios2', 'relatorios3', 'dia1'));
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

    public function diaUpdate(Request $request)
    {
        $dia = $request->all();
        $calendario = Calendario::first();
        
        $calendario->update($dia);

        return redirect()->route('relatorio');
    }

}


// APAGAR
// $resrt > calendario (15/02)
// $dia = table::where('created_at', $request)->get();
// $relatorios = Relatorio::where('tipo', 'adição' && 'created_at', $request)->get();

// request 
// converter formato de banco de dados
// bater os dados 
// tabela temp 
// store dia
// first com uma linha só

// linha só 
