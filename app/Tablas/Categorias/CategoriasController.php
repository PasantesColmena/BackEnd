<?php

namespace App\Tablas\Categorias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tablas\Categorias\Categorias;

class CategoriasController extends Controller
{
    public function getCategorias()
    {
        $data = Categorias::orderBy('nom','ASC')->get();
        return response()->json($data, 200);
    }
}
