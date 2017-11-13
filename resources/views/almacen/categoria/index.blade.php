@extends('layouts.admin')
@section('contenido')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Administración de categorias 
				<a href="categoria/create"><button class="btn btn-success">Nuevo</button></a>
			</h3>
	</div>

	<div class="row">
		<div class="col-md-6">
			@include('almacen.categoria.search')
		</div>

	</div>

	<div class="row">
		{{-- Recorriendo la tabla categorias y tomamos un registro 
			al cual llamamos $cat --}}
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					{{-- Encabezado de tabla--}}
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Opciones</th>
					</thead>		
					
					@foreach($categorias as $cat)
						<tr>
							<td>{{$cat->idcategoria}}</td>
							<td>{{$cat->nombre}}</td>
							<td>{{$cat->descripcion}}</td>
							{{--Colocamos las opciones--}}
							<td>
								<a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}">
									<button class="btn btn-primary">Editar</button>
								</a>

							<a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal">
									<button class="btn btn-danger">
										Eliminar
									</button>
							</a>
							</td>
						</tr>
					@include('almacen.categoria.modal')
					@endforeach



				</table>
			</div>
			{{-- Crear fichas con las paginas de registros--}}
			{{$categorias->render()}}

		</div>
		
	</div>

</div>
@endsection