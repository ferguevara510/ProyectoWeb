<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function vistaRegistrarUsuario(){
        return view('usuarios.registrar-usuario');
    }

    public function registrarUsuario(Request $request){
        $nuevoCliente = $request->validate([
            'matricula' => 'required',
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'fechaNacimiento' => 'date',
            'correo' => 'required|email',
            'celular' => 'required|max:10|min:10',
            'calle' => '',
            'colonia' => '',
            'codigoPostal' => '',
        ]);
        Usuario::create($nuevoCliente);
        return back()->with('success', 'Usuario creado');
    }

    public function obtenerUsuarios(Request $request){
        $usuarios = Usuario::all();
        return view('usuarios.listar-usuarios',compact('usuarios'));
    }
}
