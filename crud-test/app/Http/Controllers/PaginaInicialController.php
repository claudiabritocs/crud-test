<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginaInicial;

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

}
