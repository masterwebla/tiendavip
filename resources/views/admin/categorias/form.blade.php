<div class="form-group">
	{!! Form::label('Nombre de la Categoria') !!}
	{!! Form::text('nombre',null,[
			'class'=>'form-control',
			'required'=>'required',
			'placeholder'=>'Ingresar nombre...'
		]) 
	!!}
</div>
<div class="form-group">
	{!! Form::label('Descripcion de la Categoria') !!}
	{!! Form::textarea('descripcion',null,[
			'class'=>'form-control',
			'required'=>'required',
			'placeholder'=>'Ingresar descripcion...'
		]) 
	!!}
</div>
<input type="submit" value="Guardar Categoria" class="btn btn-primary">