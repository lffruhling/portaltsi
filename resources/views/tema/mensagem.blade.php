@if (Session::get('notice'))
<div class="alert alert-success">
 <i class="fa fa-check"></i>
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
 {!! Session::get('notice') !!}
</div>
@endif 

@if (Session::get('error'))
<div class="alert alert-danger">
 <i class="fa fa-ban"></i>
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                  
 {!! Session::get('error') !!}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <i class="fa fa-ban"></i>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                  
    Não foi possível realizar a operação.
    @foreach($errors->all() as $error)
  		<li>{!!$error!!}</li>
  	@endforeach
</div>
@endif



