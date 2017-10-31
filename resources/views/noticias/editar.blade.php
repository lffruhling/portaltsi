@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Atualizar Notícia')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
              @include('tema.mensagem')

                {!! Form::model($noticia, ['method' => 'PATCH', 'route' => ['noticias.update', $noticia->id] ]) !!}

                    @include('noticias.formulario')

                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection