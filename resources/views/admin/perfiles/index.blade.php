@extends('template')
@section('titulo','Administrador de Perfiles')

@section('contenido')
	<div class="container text-center">
		<h2>Listado de Perfiles</h2>
		<a class="btn btn-success" href="{{ route('perfiles.create') }}">Crear Nuevo Perfil</a>
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Editar</th>
				<th>Borrar</th>
			</thead>
			<tbody>
				@foreach($perfiles as $perfil)
					<tr>
						<td>{{$perfil->id}}</td>
						<td>{{$perfil->nombre}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('perfiles.edit',$perfil->id) }}">
								<i class="fa fa-pencil fa-2x"></i>
							</a>

						</td>
						<td>
							{!!Form::open(['route'=>['perfiles.destroy',$perfil->id]])!!}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger" onclick="return confirm('Eliminar el Perfil?')">
									<i class="fa fa-trash fa-2x"></i>
								</button>									
							{!!Form::close()!!}							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection