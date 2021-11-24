<?php

namespace App\Tablas\Desglose;

use Illuminate\Http\Request;
use App\Tablas\Desglose\Desglose;
use App\Tablas\Facturas\Facturas;
use Illuminate\Support\Facades\DB;
use App\Tablas\Productos\Productos;
use App\Http\Controllers\Controller;

class DesgloseController extends Controller
{
    public function create(Request $request)
    {
        $datafac = Facturas::latest()->get();
        $datafac =  $datafac[0];
        $data['facturas_id'] = $datafac['id'];
        $data['producto_id'] = $request['producto_id'];
        $data['cantidad'] = $request['cantidad'];
        $data['pre_tot'] = $request['pre_tot'];
        Desglose::create($data);
        DB::table('agenda.productos')->where('id',$request['producto_id'])->decrement('cant',$request['cantidad']);
        return response()->json([
            'message' => "Creado correctamente",
            'success' => true
        ], 200);
    }
}
