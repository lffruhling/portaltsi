@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Atualizar Categoria')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
              @include('tema.mensagem')

                {!! Form::model($categoria, ['method' => 'PATCH', 'route' => ['categorias.update', $categoria->id] ]) !!}

                    @include('categorias.formulario')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection