<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;

use DB;


class NoticiaController extends Controller
{
     public function __construct()
	{
	    $this->middleware('auth');
	}

	//lista todas as notícias
    public function index() {
    	 $noticias = Noticia::all();
     	return view('noticias.listar',compact('noticias'));
     }


     public function create(){

		$categoria     = Categoria::orderBy('descricao', 'asc')->pluck('descricao','id');

		return view("noticias.criar", compact('categoria'));
	}

// insere notícia
	public function store(Request $request){

        try {
            DB::beginTransaction();

            Noticia::create([
            'texto' => $request['texto'],
            'situacao' => $request['situacao'],
            'id_categoria' => $request['id_categoria']
        ]);

        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            return redirect()->route('noticias.index')->with('error','Não foi possível cadastrar!');
        }            

            DB::commit();
            return redirect()->route('noticias.index')->with('notice', 'Notícia Cadastrada!'); 
    }

	// editar dados da notícia
	public function edit($id){
		$noticia  = Noticia::find($id);
		$categoria     = Categoria::orderBy('descricao', 'asc')->pluck('descricao','id');
     	return view('noticias.editar',compact('noticia','categoria'));

	}


	// altera os dados da notícia 
	 public function update(Request $request, $id){
	
		$noticia = Noticia::find($id);
		$noticia->texto = $request->get('texto');
        $noticia->situacao = $request->get('situacao');
        $noticia->id_categoria = $request->get('id_categoria');


	 	try {
	 		 $noticia->save();

        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('noticias.index')->with('error','Não foi possível alterar o registro!');
        }
        
        return redirect()->route('noticias.index')->with('notice', 'Registro Atualizado com Sucesso!');

    }

  // excluir  noticia
  	public function destroy($id){

        try {
            Noticia::find($id)->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('noticias.index')->with('error','Não foi possível excluir o registro!');
        }
        
        return redirect()->route('noticias.index')->with('notice', 'Registro Excluído com Sucesso!');
    } 

}
