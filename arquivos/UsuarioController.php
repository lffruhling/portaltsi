<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

class UsuarioController extends Controller
{

	  /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	    $this->middleware('auth');
	}
    
//lista todos os usuários registrados e retorna para view
    public function index() {
    	 $usuarios = User::all();
     	return view('usuarios.listar',compact('usuarios'));
     }

// excluir usuário
  	public function destroy($id){

        try {
            User::find($id)->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('usuarios.index')->with('error','Não foi possível excluir o registro!');
        }
        
        return redirect()->route('usuarios.index')->with('notice', 'Registro Excluído com Sucesso!');
    } 


	// editar dados do usuário
	public function edit($id){
		$usuario  = User::find($id);
     	return view('usuarios.editar',compact('usuario'));

	}


	// altera os dados do usuario 
	 public function update(Request $request, $id){
	
		$usuario = User::find($id);
		$usuario->name=$request->get('name');
		$usuario->email=$request->get('email');
	    $usuario->password= bcrypt($request->get('password'));


	 	try {
	 		 $usuario->save();

        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('usuarios.index')->with('error','Não foi possível alterar o registro!');
        }
        
        return redirect()->route('usuarios.index')->with('notice', 'Registro Atualizado com Sucesso!');

    }


}