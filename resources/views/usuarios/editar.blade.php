@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Atualizar Usuário')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
              @include('tema.mensagem')

                {!! Form::model($usuario, ['method' => 'PATCH', 'route' => ['usuarios.update', $usuario->id] ]) !!}

                    @include('usuarios.formulario')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection