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

    public function create(Request $request){ //Crea los usuario
        $data['id'] = $request['id'];
        $data['nom'] = $request['nom'];
        $data['email'] = $request['email'];
        $data['ced'] = $request['ced'];
        $data['num'] = $request['num'];
        $data['dir'] = $request['dir'];
        $data['password'] = bcrypt($request['password']);
        $user = Usuarios::create($data);
        $user->assignRole('cliente');
        return response()->json([
            'message' => "Creado correctamente",
            'success' => true
        ], 200);
    }
    public function delete($id){
        $res = Usuarios::where('id',$id)->delete();
        return response()->json([
            'message' => "Eliminado correctamente",
            'success' => true
        ], 200);
    }

    public function get($ced){ //Retorna un usuario por id
        $data = Usuarios::find($ced);
        return response()->json($data, 200);
    }
    public function getLastId() //Retorna el ultimo id
    {
        $data = Usuarios::latest()->get();
        $data =  $data[0];
        $res = $data['id'];
        return response()->json($res, 200);
    }
    public function getClientes()
    {
        return Usuarios::role('cliente')->get();

    }
}
