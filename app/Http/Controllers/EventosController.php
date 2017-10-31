<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Http\Requests\EventosRequest;
use Illuminate\Http\Request;

use DB;
class EventosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //lista todas os eventos
    public function index() {
        $eventos = Eventos::all();
        return view('eventos.listar',compact('eventos'));
    }

    public function create(){

        return view("eventos.criar");
    }

    // insere Evento
    public function store(EventosRequest $request){

        try {
            DB::beginTransaction();

            Eventos::create($request->all());

        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            return redirect()->route('eventos.index')->with('error','Não foi possível cadastrar!');
        }

        DB::commit();
        return redirect()->route('eventos.index')->with('notice', 'Evento Cadastrada!');
    }

    // editar dados da evento
    public function edit($id){
        $evento  = Eventos::find($id);
        return view('eventos.editar',compact('evento'));

    }


    // altera os dados da eventos
    public function update(EventosRequest $request, $id){

//        $noticia = Eventos::find($id)->update($request->all());
//        $noticia->texto = $request->get('texto');
//        $noticia->situacao = $request->get('situacao');
//        $noticia->id_categoria = $request->get('id_categoria');


        try {
//            $noticia->save();
           Eventos::find($id)->update($request->all());

        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('eventos.index')->with('error','Não foi possível alterar o registro!');
        }

        return redirect()->route('eventos.index')->with('notice', 'Registro Atualizado com Sucesso!');

    }

    // excluir  Eventos
    public function destroy($id){

        try {
            Eventos::find($id)->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('eventos.index')->with('error','Não foi possível excluir o registro!');
        }

        return redirect()->route('eventos.index')->with('notice', 'Registro Excluído com Sucesso!');
    }

}
