@extends('templates.administrador')

@section('content')

<div id="section2" class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
		 		<h4><center>Panel de administración</center></h4>
		 		<h6><center><i>Menú principal</i></center></h6>
		 		<img src="/imagenes/administ.png">
		 	</div>
		 	<table>
		 		<tr>
	        		<td>
	        			<div class="col s12 card-panel form-panel">
	        				<center>
						 		<i class="fa fa-book fa-4x"></i><br>
						 		<a href="/tienda" id="boton" class="waves-effect waves-light btn-large">
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
		 	</table>
		 </div>
	</center>
</div>

@stop