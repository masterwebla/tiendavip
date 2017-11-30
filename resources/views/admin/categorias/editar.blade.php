@extends('template')
@section('titulo','Editar Categoría')

@section('contenido')
	<div class="container text-center">
		<h1>Editar Categoría</h1>
		@if ($errors->any())
			@include('parciales.errores')
		@endif		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::model($categoria,['route'=>['categorias.update',$categoria->id],'method'=>'put']) !!}
					@include('admin.categorias.form')
				{!! Form::close() !!}
			</div>
		</div>
		<hr>		
	</div>
@endsection