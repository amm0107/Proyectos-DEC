<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function modelos($id)
    {
        $marca = Marca::with('modelos')->findOrFail($id);
        return response()->json($marca->modelos);
    }
}
