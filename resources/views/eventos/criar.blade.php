@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Eventos')

@section('titulo_conteudo', 'Cadastrar Evento')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
              @include('tema.mensagem')

                {!! Form::open(['method' => 'POST', 'route' => ['eventos.store']]) !!}


                    @include('eventos.formulario')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection