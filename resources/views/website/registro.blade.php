@extends('templates.website')

@section('content')

<div class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
				</br>
				<img src="/imagenes/users.png">
				</br>
				<label style="font-size: 30px; color: #006064;"><b>Registro de usuario nuevo</b></label>
				<form id="registrate" method="POST">
					<div class="input-field col s12">
						<input id="nombre" type="text" class="validate">
						<label id="texto" for="nombre"><i class="fa fa-user"></i>  Nombre: </label>
				  	</div>
				  	<div class="input-field col s12">
						<input id="nick" type="text" class="validate">
						<label id="texto" for="nick"><i class="fa fa-star"></i>  Nick: </label>
				  	</div>
				  	<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label id="texto" for="email"><i class="fa fa-envelope"></i>  E-mail: </label>
				  	</div>
				  	<div class="input-field col s12">
						<input id="cont" type="password" class="validate">
						<label id="texto" for="cont"><i class="fa fa-key"></i>  Contraseña: </label>
				  	</div>
				  	<div class="input-field col s12">
						<input id="telefono" type="text" class="validate">
						<label id="texto" for="telefono"><i class="fa fa-phone"></i>  Teléfono: </label>
				  	</div>
				  	<div class="col s12">
					    <div class="col s6">
					    	<button id="section2" class="btn waves-effect waves-light" type="button" name="action">
						    	<b>Cancelar  </b><i class="fa fa-ban"></i>
						  	</button>
					    </div>
					    <div class="col s6">
					    	<button id="section2" class="btn waves-effect waves-light" type="submit" name="action">
						    	<b>Guardar  </b><i class="fa fa-floppy-o"></i>
						  	</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</center>
</div>

@stop