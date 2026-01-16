<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;

class ModeloController extends Controller
{
    public function portada()
    {
        $marcas = Marca::all();
        return view('modelos.portada', compact('marcas'));
    }

    public function list(){
        $modelos = Modelo::with('marca')->get();
        return response()->json($modelos);
    }
}
