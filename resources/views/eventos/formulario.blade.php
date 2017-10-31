<div class="form-group ">
    {!! Form::label('titulo', 'Título*', array('class' => 'control-label')) !!}
    {{ Form::text('titulo', old('titulo'), array('class' => 'form-control', 'placeholder' => 'Título', 'autofocus' => 'true', 'required')) }}
</div>

<div class="form-group ">
    {!! Form::label('local', 'Local do Evento*', array('class' => 'control-label')) !!}
    {{ Form::text('local', old('local'), array('class' => 'form-control', 'placeholder' => 'Local do Evento', 'required')) }}
</div>

<div class="form-group ">
    {!! Form::label('data_evento', 'Data do Evento*', array('class' => 'control-label')) !!}
    {{ Form::text('data_evento', old('data_evento'), array('class' => 'form-control', 'placeholder' => 'Data do Evento', 'required')) }}
</div>

<div class="form-group">
    {!! Form::label('descricao', 'Descrição', array('class' => 'control-label')) !!}
    {!! Form::textarea('descricao', old('descricao'), array('class' => 'form-control ', 'placeholder' => 'Descrição do Envento', 'style' => 'width:100%;', 'required')) !!}
</div>  

<div class="box-footer">
<button type="submit" data-toggle="tooltip" title="Salvar" class="btn btn-flat btn-sm btn-success pull-right">
    <i class="fa fa-save"></i> Salvar
</button>
</div>   



