<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'nom' => 'required|max:255',
            'ced' => 'required|min:9|max:20',
            'num' => 'required|max:15',
            'cor' => 'required|email|max:255',
            'dir' => 'required|max:255',
            'fec_nac' => 'required|max:255',
        ]);

        Usuarios::create($attributes);
        return redirect('/');
    }
}
