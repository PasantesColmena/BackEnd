<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = usuarios::all();
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if($request->hasfile('fot_per')){
            $file = $request->file('fot_per');
            $nom = time().$file->getClientOriginalName();
            $file->move(public_path().'/fot_per/', $nom);
        }

        $usuario = new usuarios();
        $usuario->nom = $request->input('nom');
        $usuario->ced = $request->input('ced');
        $usuario->num = $request->input('num');
        $usuario->cor = $request->input('cor');
        $usuario->dir = $request->input('dir');
        $usuario->fec_nac = $request->input('fec_nac');
        $usuario->fot_per = $nom;
        $usuario->save();

        // $attributes = request()->validate([
        //     'nom' => 'required|max:255',
        //     'ced' => 'required|min:9|max:20',
        //     'num' => 'required|max:15',
        //     'cor' => 'required|email|max:255',
        //     'dir' => 'required|max:255',
        //     'fec_nac' => 'required|max:255',
        //     'fot_per' => 'required',
        // ]);

        // Usuarios::create($attributes);

        return view('create');
    }
}
