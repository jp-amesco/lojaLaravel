<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Validator;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("loja.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function criaUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario = $usuario->create($request->all());
        //if ($usuario->senha == $usuaio->senhaconfirma) {
            return redirect()->action('LojaController@lista');
        //}
        //else{
            //echo "senhas não conferem";
        //}

   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('loja.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function formulario()
    {
        return view('loja.formulario');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $usuario = Usuario::get();
        return view('loja.lista', ['usuariolista'=> $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('loja.editar', ['usuarioeditar'=>$usuario]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar($id, Request $request)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->update($request -> all());

        return redirect()->action('LojaController@lista');        
    }

    public function deletar ($id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->delete();

        return redirect()->action('LojaController@lista');
    }
}

