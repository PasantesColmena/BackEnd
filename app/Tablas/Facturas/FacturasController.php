<?php

namespace App\Tablas\Facturas;

use Illuminate\Http\Request;
use App\Tablas\Facturas\Facturas;
use App\Tablas\Usuarios\Usuarios;
use App\Http\Controllers\Controller;

class FacturasController extends Controller
{
    public function create(Request $request) //Crea la factura
    {
        $dataus = Usuarios::latest()->get(); //Relaciona la factura con su respectivo cliente
        $dataus =  $dataus[0];
        $data['usuario_id'] = $dataus['id'];
        $data['tot'] = $request['tot'];
        Facturas::create($data);  //Crea la factura
        return response()->json([
            'message' => "Creado correctamente",
            'success' => true
        ], 200);
    }

    public function getLast()  //Retorna la ultima factura creada
    {
        $data = Facturas::with('usuario','desglose','desglose.producto')->latest()->get();
        return response()->json($data[0], 200);
    }
}
