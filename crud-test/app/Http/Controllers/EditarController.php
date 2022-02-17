<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;

class EditarController extends Controller
{
    public function index2(PaginaInicial $id) 
    {
        return view('adicionar', compact('id'));
    }

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
        $data = $request->all();

        $id->update($data);
    
        return redirect()->route('index');
        
    }

    public function destroy($id)
    {
        PaginaInicial::findOrFail($id)->delete();

        return redirect()->route('index');
    }

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

        return redirect()->route('index');
    }

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
        elseif($value2<100){
            dd('teste');
        }

        //Subtraindo Valores
        $value3 = $value2 - $value1;

        $id->update([
            'quantidade' => $value3
        ]);

        return redirect()->route('index');
    }


}
