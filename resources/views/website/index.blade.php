@extends('templates.website')

@section('content')

<section id="slider-libreria" class="container">
	<!--<p>Padding</p>-->
	<div class="slider" class="cyan darken-3">
		<ul class="slides" class="cyan darken-3">
	    	<li>
	        	<img src="http://ichef.bbci.co.uk/news/ws/660/amz/worldservice/live/assets/images/2014/12/23/141223123023_libro_electronico_ebook_reading_624x351_thinkstock.jpg"> <!-- random image -->
	        	<div class="caption center-align">
	          		<h3>¡Bienvenido!</h3>
	          		<h5 class="light grey-text text-lighten-3 center">A "tu librería"...</h5>
	        	</div>
	      	</li>
	      	<li>
	        	<img src="http://planetadelibrosmexico.com/wp-content/uploads/2014/08/tumblr_n8z49c84HS1tr9u2ao1_500.jpg"> <!-- random image -->
	      	</li>
	      	<li>
	        	<img src="http://mqltv.com/wp-content/uploads/2015/08/lectura-bus-640x390.jpg"> <!-- random image -->
	      	</li>
	      	<li>
	        	<img src="http://cdn.20m.es/img2/recortes/2012/06/27/67009-599-401.jpg"> <!-- random image -->
	      	</li>
	      	<li>
	        	<img src="http://practicopedia.lainformacion.com/files/leyendo476_0.jpg"> <!-- random image -->
	      	</li>
	    </ul>
	</div>
</section>

<section id="section2" class="container">
	<div class="row">
		<div class="col s12 l4">
			<center>
				<i class="fa fa-check-square-o fa-3x"></i></br>
				<b>Calidad</b>
				<p align=justify>
					Somos una empresa comprometida con el ofrecimiento de productos y servicios de calidad.
					<p align=justify>
						Nuestra prioridad es la satisfacción del cliente, por ello buscamos tener una gran variedad de libros a su disposición.
					</p>
				</p>
			</center>
		</div>
		<div class="col s12 l4">
			<center>
				<i class="fa fa-truck fa-3x"></i></br>
				<b>Envíos</b>
				<p align=justify>
					Realizamos envíos internacionales seguros.
					<p align=justify>
						Trabajamos con empresas de transportes Nacionales e Internaciones que garantizan un correcto envío del producto.
					</p>
				</p>
			</center>
		</div>
		<div class="col s12 l4">
			<center>
				<i class="fa fa-credit-card fa-3x"></i></br>
				<b>Pagos</b>
				<p align=justify>
					"Tu librería" te ofrece dos tipos principales de métodos de pago:
					<p align=justify>
						<b>1.</b> Pago en efectivo. Podrá realizarse a través de deposito en el banco de su preferencia.
					</p>
					<p align=justify>
						<b>2.</b> Pago con tarjeta. Deberá proporcionar su número de cuenta para efectuar el pago.
					</p>
				</p>
			</center>
		</div>
	</div>
</section>

@stop