<html>
<head>
	<meta charset="UTF-8">
	<title>Editar datos</title>
	@include('layouts.bootstrap')
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3>Editar categoria : {{$categoria->nombre}}</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif


            <form action="{{action('CategoriaController@update',['id'=>$categoria->idcategoria])}}" method="POST" role="form">

				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

	            <div class="form-group">
	            	<label for="nombre">Nombre</label>
	            	<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}" placeholder="Nombre...">
	            </div>
	            <div class="form-group">
	            	<label for="descripcion">Descripción</label>
	            	<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}" placeholder="Descripción...">
	            </div>
	            <div class="form-group">
	            	<button class="btn btn-primary" type="submit">Guardar</button>
	            	<button class="btn btn-danger" type="reset">Cancelar</button>
	            </div>

			</form>
            

          





			</div>
		</div>
	</div>
	
</body>
</html>