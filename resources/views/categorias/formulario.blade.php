<div class="form-group ">
    {!! Form::label('descricao', 'Descrição', array('class' => 'control-label')) !!}  
    {{ Form::text('descricao', old('descricao'), array('class' => 'form-control', 'placeholder' => 'descricao', 'autofocus' => 'true', 'required')) }} 
</div>


</div>
<div class="box-footer">
<button type="submit" data-toggle="tooltip" title="Salvar" class="btn btn-flat btn-sm btn-success pull-right">
    <i class="fa fa-save"></i> Salvar
</button>
</div>   



