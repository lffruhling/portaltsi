@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Cadastrar Categoria')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
              @include('tema.mensagem')

                {!! Form::open(['method' => 'POST', 'route' => ['categorias.store']]) !!}


                    @include('categorias.formulario')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection