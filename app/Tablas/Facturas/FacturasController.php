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
        $data['usuario_id'] = $request['usuario_id'];
        $data['tot'] = $request['tot'];
        Facturas::create($data);  //Crea la factura
        return response()->json([
            'message' => "Creado correctamente",
            'success' => true
        ], 200);
    }

    public static function getAll()  //Retorna la ultima factura creada
    {
        $data = Facturas::with('usuario','desglose','desglose.producto')->latest()->get();
        return response()->json($data, 200);
    }
    public function delete($id){
        $res = Facturas::where('id',$id)->delete();
        return response()->json([
            'message' => "Eliminado correctamente",
            'success' => true
        ], 200);
    }
    public static function getLast($id)  //Retorna la ultima factura creada
    {
        $data = Facturas::where('usuario_id',$id)->with('usuario','desglose','desglose.producto')->latest()->get();
        return response()->json($data[0], 200);
    }
    public static function getLastPdf()  //Retorna la ultima factura creada
    {
        $data = Facturas::with('usuario','desglose','desglose.producto')->latest()->get();
        return $data[0];
    }
}
