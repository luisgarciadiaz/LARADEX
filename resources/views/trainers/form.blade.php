<div class="form-group">
	{!!Form::label('name','Nombre') !!}
	{!!Form::text('name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('avatar','Avatar') !!}
	{!!Form::file('avatar')!!}
</div>
<div class="form-group">
	{!!Form::label('descripcion','descripcion') !!}
	{!!Form::text('descripcion',null,['class'=>'form-control'])!!}
</div>