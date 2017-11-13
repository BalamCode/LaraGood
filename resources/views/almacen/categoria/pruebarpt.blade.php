<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 align="center">Listado de categorias </h3>
	</div>

	
			<table width="100%" align="center">
					{{-- Encabezado de tabla--}}
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Descripcion</th>
						</tr>
					</thead>		

					<tbody>
						@foreach($categorias as $cat)
							<tr>
								<td>{{$cat->idcategoria}}</td>
								<td>{{$cat->nombre}}</td>
								<td>{{$cat->descripcion}}</td>
							</tr>
						@endforeach
					</tbody>


				</table>
			</div>
			{{-- Crear fichas con las paginas de registros--}}
		

		</div>
		
	</div>

</div>
</body>
</html>
