<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestCategoria;

use App\Categoria;
use DB;


class CategoriasController extends Controller
{
    public function __construct()
	{
	    $this->middleware('auth');
	}

	//lista todas as categoriasregistrados e retorna para view
    public function index() {
    	 $categorias = Categoria::all();
     	return view('categorias.listar',compact('categorias'));
     }

     // criar categoria
    public function create()
    {
    	return view("categorias.criar");
      
    }

    // insere categoria
	public function store(RequestCategoria $request){
        try {
            DB::beginTransaction();

            Categoria::create([
            'descricao' => $request['descricao'],
        ]);

        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            return redirect()->route('categorias.index')->with('error','Não foi possível cadastrar!');
        }            

            DB::commit();
            return redirect()->route('categorias.index')->with('notice', 'Categoria Cadastrada!');
    }


	// editar dados da categoria
	public function edit($id){
		$categoria  = Categoria::find($id);
     	return view('categorias.editar',compact('categoria'));

	}


	// altera os dados da categoria 
	 public function update(RequestCategoria $request, $id){
	
		$categoria = Categoria::find($id);
		$categoria->descricao=$request->get('descricao');


	 	try {
	 		 $categoria->save();

        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('categorias.index')->with('error','Não foi possível alterar o registro!');
        }
        
        return redirect()->route('categorias.index')->with('notice', 'Registro Atualizado com Sucesso!');

    }



     // excluir  categoria
  	public function destroy($id){

        try {
            Categoria::find($id)->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('categorias.index')->with('error','Não foi possível excluir o registro!');
        }
        
        return redirect()->route('categorias.index')->with('notice', 'Registro Excluído com Sucesso!');
    } 




}
