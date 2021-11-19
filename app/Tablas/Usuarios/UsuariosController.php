<?php

namespace App\Tablas\Usuarios;

use Illuminate\Http\Request;
use App\Tablas\Usuarios\Usuarios;
use App\Http\Controllers\Controller;

Use Log;

class UsuariosController extends Controller
{
    public function getAll()
    {
        $data = Usuarios::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['id'] = $request['id'];
        $data['nom'] = $request['nom'];
        $data['ced'] = $request['ced'];
        $data['num'] = $request['num'];
        $data['dir'] = $request['dir'];
        Usuarios::create($data);
        return response()->json([
            'message' => "Creado correctamente",
            'success' => true
        ], 200);
    }
    public function delete($ced){
        $res = Usuarios::where('ced',$ced)->delete();
        return response()->json([
            'message' => "Eliminado correctamente",
            'success' => true
        ], 200);
    }

    public function get($ced){
        $data = Usuarios::find($ced);
        return response()->json($data, 200);
      }

}
