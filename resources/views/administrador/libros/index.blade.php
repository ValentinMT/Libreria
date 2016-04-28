@extends('templates.administrador')

@section('content')

<div id="section2" class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
		 		<h4><center>Panel de administración de libros</center></h4>
		 		<a href="/administrador" style="color:#006064" align=left><b>Menú principal</b></a>
		 		<span class="separador">|</span>
		 		<a class="activeMenu" style="color:#006064"><b>Libros</b></a>
		 		<br><br>
		 	</div>

		 	<div class="row">
		 		<div class="col s12 m6 16">
		 			<a href="/administrador/libros/create" class="item">
		 				<div class="card-panel grey lighten-4 form-panel">
		 					<div class="row">
		 						<div class="col s2">
									<h3 class="color-item"><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong class="color-item">Registrar Libros</strong>
									</h5>
									<h6 class="color-subitem">Registro de libros</h6>
								</div>
					 		</div>
		 				</div>
		 			</a>
		 		</div>
		 		<div class="col s12 m6 16">
		 			<a href="/administrador/libros/show" class="item">
		 				<div class="card-panel grey lighten-4 form-panel">
		 					<div class="row">
		 						<div class="col s2">
									<h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong class="color-item">Consulta Libros</strong>
									</h5>
									<h6 class="color-subitem">Consulta y edita libros</h6>
								</div>
					 		</div>
		 				</div>
		 			</a>
		 		</div>
			</div>
		</div>
	</center>
</div>

@stop