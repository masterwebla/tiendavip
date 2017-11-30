<div class="form-group">
	{!! Form::label('Nombre del Perfil') !!}
	{!! Form::text('nombre',null,[
			'class'=>'form-control',
			'required'=>'required',
			'placeholder'=>'Ingresar nombre...'
		]) 
	!!}
</div>
<input type="submit" value="Guardar Perfil" class="btn btn-primary">