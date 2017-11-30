@extends('template')
@section('titulo','Administrador de Categorias')

@section('contenido')
	<div class="container text-center">
		<h2>Listado de Categorias</h2>
		<a class="btn btn-success" href="{{ route('categorias.create') }}">Crear Nueva Categoría</a>
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Editar</th>
				<th>Borrar</th>
			</thead>
			<tbody>
				@foreach($categorias as $categoria)
					<tr>
						<td>{{$categoria->id}}</td>
						<td>{{$categoria->nombre}}</td>
						<td>{{$categoria->descripcion}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('categorias.edit',$categoria->id) }}">
								<i class="fa fa-pencil fa-2x"></i>
							</a>

						</td>
						<td>
							{!!Form::open(['route'=>['categorias.destroy',$categoria->id]])!!}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger" onclick="return confirm('Eliminar el categoria?')">
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