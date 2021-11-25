<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
Use Log;

class UsuariosController extends Controller
{
    public function getAll()
    {
        $data = usuarios::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['nom'] = $request['nom'];
        $data['ced'] = $request['ced'];
        $data['num'] = $request['num'];
        $data['cor'] = $request['cor'];
        $data['dir'] = $request['dir'];
        $data['edad'] = $request['edad'];
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
