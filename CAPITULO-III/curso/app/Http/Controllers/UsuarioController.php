<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class UsuarioController extends Controller
{
    public function index()
    {
    	return view('Users.welcome');
    }

    public function create()
    {
    	return view('Users.form');
    }

    public function list()
    {
        $users= Usuario::all();
    	return view('Users.list')->with('users',$users);
    }

    public function save()
    {
        $datos= request()->all();
        Usuario::create([
            'nombre' => $datos['nombre'],
            'apellido' => $datos['apellido']
        ]);
        return redirect()->action('UsuarioController@list');
    }

    public function edit($id)
    {
        $user= Usuario::find($id);
        return view('Users.form')
        ->with('user',$user);

    }

    public function update()
    {
        $datos= request()->all();

        Usuario::where('id',$datos['id'])
                ->update([
                    'nombre' => $datos['nombre'],
                    'apellido' => $datos['apellido']
                ]);

        return redirect()->action('UsuarioController@list');

    }

    public function delete($id)
    {
        Usuario::destroy($id);
        return redirect()->action('UsuarioController@list');

    }


    
}
