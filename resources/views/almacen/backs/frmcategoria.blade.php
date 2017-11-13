<html>
<head>
	<meta charset="UTF-8">
	<title> Alta categorias </title>
	@include('layouts.bootstrap')
</head>
<body>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3>Nueva categoria</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

	</div>
	<form action="{{route('almacen.categoria.store')}}" method="POST" role="form">
		<legend>Agregando categorias</legend>
			<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		
				<div class="form-group">
					<label form='nombre'>Nombre</label>
					<input type="text" name="nombre" class="form-control" placeholder="Nombre....">

				</div>

				<div class="form-group">
					<label form='descripcion'>Descripcion</label>
					<input type="text" name="descripcion" class="form-control" placeholder="Nombre....">
					
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Gurdar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
		
	
	</form>
</body>
</html>