<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;
use App\Models\Relatorio;

class EditarController extends Controller
{
    //Para levar à página de adição de produtos ao Estoque

    public function index2(PaginaInicial $id) 
    {
        return view('adicionar', compact('id'));
    }

    //Para levar à página de remoção de produtos do Estoque

    public function index(PaginaInicial $id) 
    {
        return view('remover', compact('id'));
    }

    public function edit(PaginaInicial $id)
    {
        return view('atualizar', compact('id'));
    }

    public function update(PaginaInicial $id, Request $request)
    {
        $data = new PaginaInicial();
        // $data = $request->all();
        $data->SKU = $request->SKU;
        $data->nome = $request->nome;
        $data->quantidade = $request->quantidade;
        $data->sistema = $request->sistema;
        
        $id->update([
           
            'SKU' => $data->SKU,
            'nome' => $data->nome,
            'quantidade' => $data->quantidade,
            'sistema' => $data->sistema,
        ]);
    
    
        return redirect()->route('index');
        
    }

    public function destroy($id)
    {
        PaginaInicial::findOrFail($id)->delete();

        return redirect()->route('index');
    }

    //Para adicionar produtos ao Estoque

    public function increment(PaginaInicial $id, Request $request)
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
        $novoRelatorio->sistema = $new[0]->sistema;
        $novoRelatorio->tipo = 'Adição';

        $novoRelatorio->save();


        return redirect()->route('index');
    }

    //Para remover produtos do Estoque

    public function decrement(PaginaInicial $id, Request $request)
    {
        //Pegando o valor input
        $valor = new PaginaInicial();
        $valor->quantidade = $request->quantidade;

        //Pegando valor do banco
        $bd = PaginaInicial::where('id', [$id->id])->get('quantidade');

        //Separando o Valores
        $value1 = $valor->quantidade;
        $value2 = $bd[0]->quantidade;

        if($value2<$value1)
        {
            return view('error');
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
        $novoRelatorio->sistema = $new[0]->sistema;
        $novoRelatorio->tipo = 'Remoção';

        $novoRelatorio->save();

        return redirect()->route('index');
    }

}
