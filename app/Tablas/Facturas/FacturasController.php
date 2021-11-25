<?php

namespace App\Tablas\Facturas;

use Illuminate\Http\Request;
use App\Tablas\Facturas\Facturas;
use App\Tablas\Usuarios\Usuarios;
use App\Http\Controllers\Controller;

class FacturasController extends Controller
{
    public function create(Request $request)
    {
        $dataus = Usuarios::latest()->get();
        $dataus =  $dataus[0];
        $data['usuario_id'] = $dataus['id'];
        $data['tot'] = $request['tot'];
        Facturas::create($data);
        return response()->json([
            'message' => "Creado correctamente",
            'success' => true
        ], 200);
    }

    public function getLast()
    {
        $data = Facturas::with('usuario','desglose','desglose.producto')->latest()->get();
        return response()->json($data[0], 200);
    }
}
