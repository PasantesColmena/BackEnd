<?php

namespace App\Tablas\Productos;

use Illuminate\Http\Request;
use App\Tablas\Productos\Productos;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ProductosController extends Controller
{
    public function getAll()  //retorna todos los productos
    {
        $data = Productos::with('categoria')->orderBy('nom','ASC')->get();
        return response()->json($data, 200);
    }
    public function getAllCat($id)  //Retorna todos los productos de un categoria
    {
        $data = Productos::with('categoria')->where('categoria_id', $id)->orderBy('nom','ASC')->get();
        return response()->json($data, 200);
    }
    public function imagen($fileName)  //Retorna la imagen para descargar
    {
        $path = public_path().'/ImagenesSeeder/'.$fileName;
        return Response::download($path);
    }
}
