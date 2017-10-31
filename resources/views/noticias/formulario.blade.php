
<div class="form-group">
    {!! Form::label('situacao', 'Situação', array('class' => 'control-label')) !!}  
    {!! Form::select('situacao', ['Ativo' => 'Ativo', 'Desativado' => 'Desativado'] ,null, array('class' => 'form-control', 'required')) !!}
</div> 


<div class="form-group">
    {!! Form::label('texto', 'Postagem', array('class' => 'control-label')) !!}    
    {!! Form::textarea('texto', null, array('class' => 'form-control ', 'placeholder' => 'Postagem', 'style' => 'width:100%;', 'required')) !!}
</div>  

<div class="form-group">
    {!! Form::label('id_categoria', 'Categoria da Notícia', array('class' => 'control-label')) !!}   
    {!! Form::select('id_categoria', $categoria, null, ['class' => 'form-control select']) !!}
</div>   


<div class="box-footer">
<button type="submit" data-toggle="tooltip" title="Salvar" class="btn btn-flat btn-sm btn-success pull-right">
    <i class="fa fa-save"></i> Salvar
</button>
</div>   



