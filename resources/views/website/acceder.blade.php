@extends('templates.website')

@section('content')

<div class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
		 		<div class="card-panel form-acceso">
		 			@if(Session::has('error'))
		 				<p class="error">Usuario no encontrado.</p>
		 			@endif
		 			<form class="col s12" action="/login" method="POST">
		 				{{csrf_field()}}
		 				<div class="row">
		 					<div class="input-field col s12">
		 						<input id="email" type="email" name="email" class="validate" required>
          						<label for="email"><i class="fa fa-envelope"></i> Email</label>
		 					</div>
		 				</div>
		 				<div class="row">
		 					<div class="input-field col s12">
		 						<input id="password" type="password" name="password" class="validate" required>
          						<label for="password"><i class="fa fa-key"></i> Password</label>
		 					</div>
		 				</div>
		 				<div class="row">
		 					<div class="col s12">
		 						<button type"submit" class="btn waves-effect waves-light cyan darken-3 right">
		 							Acceder
		 						</button>
		 					</div>
		 				</div>
		 			</form>
		 		</div>
				<!--</br>
				<img src="/imagenes/persona.png">
				<form id="form" method="POST">
					<div class="input-field col s12">
						<input id="usuario" type="text" class="validate">
						<label id="texto" for="usuario"><i class="fa fa-user"></i>  Usuario</label>
				  	</div>
			       	<div class="input-field col s12">
					    <input id="contra" type="text" class="validate">
					    <label id="texto" for="contra"><i class="fa fa-key"></i>  Contraseña</label>
				    </div>
				    </br></br></br>
				    <div id="section2" class="col s12">
					    <div class="col s6">
					    	<input type="checkbox" id="test5"/>
					    	<label for="test5">  Recordar</label>
					    </div>
					    <div class="col s6">
					    	<a href="/registro" style="font-size: 14px; color: gray;"><link>
					    		<i class="fa fa-user-plus"></i>  Regístrate</link></a>
						</div>
					</div>
				    <button id="section2" class="btn waves-effect waves-light cyan darken-3" type="submit" name="action">
				  		<b>Iniciar Sesión</b> 
				  	</button>
				</form>-->
			</div>
		</div>
	</center>
</div>

@stop