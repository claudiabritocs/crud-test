<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Relatorio;
use App\Models\PaginaInicial;
use App\Http\Resources\PaginaInicialResource;



class ApiController extends Controller
{

    public function index()
    {
        return PaginaInicial::all();
       
    }


    public function show($id)
    {
        return PaginaInicial::findOrFail($id);
    }


    public function update(Request $request, PaginaInicial $id)
    {
       
        //Pegando o valor input
        $valor = new PaginaInicial();
        $valor->quantidade = $request->quantidade;

        //Pegando valor do banco
        $bd = PaginaInicial::where('id', [$id->id])->get('quantidade');


        //Extraindo Valores
        $value1 = $valor->quantidade;
        $value2 = $bd[0]->quantidade;

        if($value2<$value1)
        {
            return ('Impossível pois não há estoque o suficiente');
        }

        //Subtraindo Valores
        $value3 = $value2 - $value1;

        $id->update([
            'quantidade' => $value3
        ]);

        $new = PaginaInicial::where('id', [$id->id])->get();

        $novoRelatorio = new Relatorio();
        $novoRelatorio->SKU = $new[0]->SKU;
        $novoRelatorio->nome = $new[0]->nome;
        $novoRelatorio->quantidade = $value1;
        $novoRelatorio->sistema = 'API';
        $novoRelatorio->tipo = 'Remoção';

        $novoRelatorio->save();
    }


    public function update2(PaginaInicial $id, Request $request)
    {
        //Pegando valor input
        $valor = new PaginaInicial();
        $valor->quantidade = $request->quantidade;

        //Pegando valor do banco
        $bd = PaginaInicial::where('id', [$id->id])->get('quantidade');
        
        //Separando o Valores
        $value1 = $valor->quantidade;
        $value2 = $bd[0]->quantidade;
        
        //Somando Valores
        $value3 = $value1 + $value2;
       
        // dd($valorReal);
        
        $id->update([
            'quantidade' => $value3
        ]);

        // AQUI GRAVA LA TB
        
        $new = PaginaInicial::where('id', [$id->id])->get();

        $novoRelatorio = new Relatorio();
        $novoRelatorio->SKU = $new[0]->SKU;
        $novoRelatorio->nome = $new[0]->nome;
        $novoRelatorio->quantidade = $value1;
        $novoRelatorio->sistema = 'API';
        $novoRelatorio->tipo = 'Adição';

        $novoRelatorio->save();


        return redirect()->route('index');
    }
}
