@extends('template')
@section('titulo','Crear Perfil')

@section('contenido')
	<div class="container text-center">
		<h1>Crear Perfil</h1>
		@if ($errors->any())
			@include('parciales.errores')
		@endif		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'perfiles.store']) !!}
					@include('admin.perfiles.form')
				{!! Form::close() !!}
			</div>
		</div>
		<hr>		
	</div>
@endsection