<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;

class EditarController extends Controller
{
    public function index(PaginaInicial $id) 
    {
        // $prodedit = PaginaInicial::firstOrFail()->find($id);

        return view('editar', compact('id'));
    }
}
