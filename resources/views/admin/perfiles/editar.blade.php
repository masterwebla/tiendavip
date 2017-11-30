@extends('template')
@section('titulo','Editar Perfil')

@section('contenido')
	<div class="container text-center">
		<h1>Editar Perfil</h1>
		@if ($errors->any())
			@include('parciales.errores')
		@endif		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::model($perfil,['route'=>['perfiles.update',$perfil->id],'method'=>'put']) !!}
					@include('admin.perfiles.form')
				{!! Form::close() !!}
			</div>
		</div>
		<hr>		
	</div>
@endsection