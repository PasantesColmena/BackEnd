<?php

namespace App\Tablas\Productos;

use Illuminate\Http\Request;
use App\Tablas\Productos\Productos;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ProductosController extends Controller
{
    public function getAll()
    {
        $data = Productos::with('categoria')->orderBy('nom','ASC')->get();
        return response()->json($data, 200);
    }
    public function imagen($fileName)
    {
        $path = public_path().'/ImagenesSeeder/'.$fileName;
        return Response::download($path);
    }
}
