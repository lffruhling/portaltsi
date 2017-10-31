@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Cadastrar Notícia')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
              @include('tema.mensagem')

                {!! Form::open(['method' => 'POST', 'route' => ['noticias.store']]) !!}


                    @include('noticias.formulario')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection