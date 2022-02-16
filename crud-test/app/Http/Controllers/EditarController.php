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


}
