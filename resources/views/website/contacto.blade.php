@extends('templates.website')

@section('content')

<div id="section2" class="container">
	<div class="row">
		<div class="col s12">
			<div class="col s4">
				<h4>Contáctanos</h4>
			</div>
			<div class="col s3">
				<h6><i class="fa fa-home"></i> Calle Pipila #106</h6>
				<h6>Barrio Alto</h6>
				<h6>Comala, Colima, México</h6>
			</div>
			<div class="col s2">
				<h6><i class="fa fa-phone"></i> Tel: 3155606</h6>
				<h6><i class="fa fa-fax"></i> Fax: 3155607</h6>
			</div>
			<div class="col s3">
				<h6><i class="fa fa-envelope"></i> E-mail: tulibro@books.mx</h6>
				<h6><i class="fa fa-mobile"></i> Cel: 3121429626</h6>
			</div>
		</div>

		<div class="col s12">
			<center>
	    		<div id="section2" class="col s4">
	    			<form id="section2" action="/mensajes" method="POST">
	    				{{csrf_field()}}
						<div id="section2" class="input-field col s12">
						    <input type="text" class="validate" name="nombre">
						    <label id="texto"><i class="fa fa-user"></i>  Nombre</label>
				  		</div>
			       		<div class="input-field col s12">
					      	<input type="email" class="validate" name="email">
					      	<label id="texto"><i class="fa fa-envelope"></i>  E-mail</label>
				       	</div>
				       	<!--<div class="input-field col s12">
					      	<input id="asunto" type="text" class="validate">
					      	<label id="texto" for="asunto"><i class="fa fa-pencil"></i>  Asunto</label>
				       	</div>-->
				       	<div class="input-field col s12">
					      	<textarea class="materialize-textarea" length="250" name="mensaje"></textarea>
					      	<label id="texto"><i class="fa fa-comment"></i>  Mensaje</label>
				       	</div>
				       	<button id="section2" class="btn waves-effect waves-light cyan darken-3" type="submit" name="action">
				    		<b>Enviar  </b><i class="fa fa-paper-plane"></i> 
				  		</button>
				    </form>
	    		</div>
	    		<div class="col s8">
	    			<img class="responsive-img" src="/imagenes/Contacto.jpg">
	    		</div>
    		</center>
    	</div>
	</div>
</div>

@stop