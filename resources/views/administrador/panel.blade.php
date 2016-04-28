@extends('templates.administrador')

@section('content')

<div id="section2" class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
		 		<h4><center>Panel de administración</center></h4>
		 		<h6><center><a class="activeMenu" style="color:#006064"><b>Menú principal</b></a></center></h6>
		 		<br>
		 		<img src="/imagenes/administ.png">
		 	</div>

		 	<div class="row">
		 		<div class="col s12 m6 16">
		 			<a href="/administrador/libros" class="item">
		 				<div class="card-panel grey lighten-4 form-panel">
		 					<div class="row">
		 						<div class="col s2">
		 							<h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong class="color-item">Libros</strong>
									</h5>
									<h6 class="color-subitem">Módulo libros</h6>
								</div>
		 					</div>
		 				</div>
		 			</a>
		 		</div>
		 		<div class="col s12 m6 l6">
					<a href="/administrador/ventas" class="item">
						<div class="card-panel grey lighten-4 form-panel">
							<div class="row">
								<div class="col s2">
									<h3><b><i class="fa fa-usd" aria-hidden="true"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong>Ventas</strong>
									</h5>
									<h6>Modulo de ventas</h6>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col s12 m6 l6">
					<a href="/administrador/usuarios" class="item">
						<div class="card-panel grey lighten-4 form-panel">
							<div class="row">
								<div class="col s2">
									<h3><b><i class="fa fa-users"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong>Usuarios</strong>
									</h5>
									<h6>Módulo de usuarios</h6>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col s12 m6 l6">
					<a href="/administrador/configuracion" class="item">
						<div class="card-panel grey lighten-4 form-panel">
							<div class="row">
								<div class="col s2">
									<h3><b><i class="fa fa-cog"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong>Configuración</strong>
									</h5>
									<h6>Configuración de la cuenta</h6>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col s12 m6 l6">
					<a href="/" class="item" target="_blank">
						<div class="card-panel grey lighten-4 form-panel">
							<div class="row">
								<div class="col s2">
									<h3><b><i class="fa fa-desktop"></i></b></h3>
								</div>
								<div class="col s10">
									<h5>
										<strong>Sitio web</strong>
									</h5>
									<h6>Ver sitio web del ayuntamiento</h6>
								</div>
							</div>
						</div>
					</a>
				</div>
		 	</div>
		 	<!--<table>
		 		<tr>
	        		<td>
	        			<div class="col s12 card-panel form-panel">
	        				<center>
						 		<i class="fa fa-book fa-4x"></i><br>
						 		<a href="/administrador/libros" id="boton" class="waves-effect waves-light btn-large">
							  		<b>Libros  </b>
							  	</a>
						  	</center>
					 	</div>
	        		</td>
	        		<td></td>
	        		<td>
	        			<div class="col s12 card-panel form-panel">
	        				<center>
							  	<i class="fa fa-shopping-bag fa-4x"></i><br>
						 		<a href="/carrito" id="boton" class="waves-effect waves-light btn-large">
							  		<b>Ventas  </b>
							  	</a>
						  	</center>
					 	</div>
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<div class="col s12 card-panel form-panel">
	        				<center>
						 		<i class="fa fa-user fa-4x"></i><br>
						 		<a href="/" id="boton" class="waves-effect waves-light btn-large">
							  		<b>Usuarios  </b>
							  	</a>
						    </center>
					 	</div>
	        		</td>
	        		<td></td>
	        		<td>
	        			<div class="col s12 card-panel form-panel">
	        				<center>
						 		<i class="fa fa-cogs fa-4x"></i><br>
						 		<a href="/" id="boton" class="waves-effect waves-light btn-large">
							  		<b>Configuración  </b>
							  	</a>
						  	</center>
					 	</div>
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<div class="col s12 card-panel form-panel">
	        				<center>
						 		<i class="fa fa-desktop fa-4x" aria-hidden="true"></i><br>
						 		<a href="/" id="boton" class="waves-effect waves-light btn-large">
							  		<b>Sitio web  </b>
							  	</a>
						    </center>
					 	</div>
	        		</td>
	        		<td></td>
	        		<td></td>
	        	</tr>
		 	</table>-->
		 </div>
	</center>
</div>

@stop