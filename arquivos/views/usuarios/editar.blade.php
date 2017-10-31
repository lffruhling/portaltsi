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

                
                <div class="form-group ">
                    {!! Form::label('nome', 'Nome', array('class' => 'control-label')) !!}  
                    {{ Form::text('name', old('name'), array('class' => 'form-control', 'placeholder' => 'nome', 'autofocus' => 'true', 'required')) }} 
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail', array('class' => 'control-label')) !!}     
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        {{ Form::email('email', old('email'), array('class' => 'form-control', 'placeholder' => 'e-mail', 'style' => 'text-transform:lowercase;', 'required')) }}
                    </div> 
                </div>                          


                <div class="form-group">
                    {!! Form::label('password', 'Senha', array('class' => 'control-label')) !!} 

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        {{ Form::password('password',  array('class' => 'form-control', 'id' =>'password', 'placeholder' => 'senha', 'required', 'minlength' => '6')) }} 
                    </div>                             
                </div>        

                <div class="form-group">
                    {!! Form::label('confirmacao_senha', 'Confirmar senha', array('class' => 'control-label')) !!}  
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        {{ Form::password('password_confirm', array('class' => 'form-control','id' =>'password_confirm',  'placeholder' => 'confirmar senha', 'required', 'minlength' => '6')) }} 
                    </div>  
                </div> 


            </div>
            <div class="box-footer">
                <button type="submit" data-toggle="tooltip" title="Salvar" class="btn btn-flat btn-sm btn-success pull-right">
                    <i class="fa fa-save"></i> Salvar
                </button>
            </div>            
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection