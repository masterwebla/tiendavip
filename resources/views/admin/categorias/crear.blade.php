@extends('template')
@section('titulo','Crear Categoría')

@section('contenido')
	<div class="container text-center">
		<h1>Crear Categoría</h1>
		@if ($errors->any())
			@include('parciales.errores')
		@endif		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'categorias.store']) !!}
					@include('admin.categorias.form')
				{!! Form::close() !!}
			</div>
		</div>
		<hr>		
	</div>
@endsection