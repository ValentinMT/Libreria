<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta id="token" name="token" value="{{ csrf_token() }}"> <!--Token de VUEJS-->
	<title>Tu Librería</title>
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
	<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
</head>

<body> <!--style="background-image: url('/imagenes/libros02.jpg')"-->
	<header>
		<?php $route = Route::current()->uri(); ?>
		<nav class="cyan darken-3">
		    <div class="nav-wrapper">
		    	<a href="/" class="brand-logo" style="margin-left: 20px">Tu Librería <i class="fa fa-book"></i></a>
		      	<a href="/" data-activates="mobile-demo" class="button-collapse" style="margin-left: 20px"><i class="fa fa-bars"></i></a>
		      	<!--Resoluciones PC-->
		      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		        	<li class=@if($route == 'tienda') {{'active-item'}} @endif><a href="/tienda"><i class="fa fa-shopping-bag"></i>  Tienda</a></li>
		        	<li class=@if($route == 'carrito') {{'active-item'}} @endif><a href="/carrito"><i class="fa fa-shopping-cart"></i>  Carrito</a></li>
		        	<li class=@if($route == 'acerca') {{'active-item'}} @endif><a href="/acerca"><i class="fa fa-question-circle"></i>  Acerca</a></li>
			        <li class=@if($route == 'contacto') {{'active-item'}} @endif><a href="/contacto"><i class="fa fa-envelope"></i>  Contacto</a></li>
			        <?php if(Auth::check()){ ?>
			        	<li>&nbsp;<i class="fa fa-star"></i> <?php echo (Auth::user()->nombre);?>&nbsp; &nbsp; &nbsp;</li>
			    	<?php } else { ?>
				        <li class=@if($route == 'acceder') {{'active-item'}} @endif><a href="/acceder"><i class="fa fa-sign-in"></i>  Acceder</a></li>
				    <?php } ?>
			    </ul>
			    <!--Resoluciones Tabletas y Telefonos-->
			    <ul class="side-nav" id="mobile-demo">
			        <li><a href="/tienda"><i class="fa fa-shopping-bag"></i>  Tienda</a></li>
			        <li><a href="/carrito"><i class="fa fa-shopping-cart"></i>  Carrito</a></li>
			        <li><a href="/acerca"><i class="fa fa-question-circle"></i>  Acerca</a></li>
			        <li><a href="/contacto"><i class="fa fa-envelope"></i>  Contacto</a></li>
			        <li><a href="/acceder"><i class="fa fa-sign-in"></i>  Acceder</a></li>
			    </ul>
		    </div>
		</nav>
	</header>

	@yield('content')

	<footer class="page-footer cyan darken-3">
        <div class="container">
        	<div class="row">
            	<div class="col l6 s12">
                	<h4 class="white-text">
                		Tu Librería <i class="fa fa-book"></i>
                	</h4>
                	<p class="grey-text text-lighten-4">Leer es una experiencia de vida.</p>
              	</div>
            <div class="col l4 offset-l2 s12">
                <h4 class="white-text">Enlaces</h4>
                <ul>
                	<li><a class="grey-text text-lighten-3" href="/tienda"><i class="fa fa-shopping-bag"></i>  Tienda</a></li>
                  	<li><a class="grey-text text-lighten-3" href="/carrito"><i class="fa fa-shopping-cart"></i>  Carrito</a></li>
                  	<li><a class="grey-text text-lighten-3" href="/acerca"><i class="fa fa-question-circle"></i>  Acerca</a></li>
                  	<li><a class="grey-text text-lighten-3" href="/contacto"><i class="fa fa-envelope"></i>  Contacto</a></li>
                  	<li><a class="grey-text text-lighten-3" href="/acceder"><i class="fa fa-sign-in"></i>  Acceder</a></li>
                </ul>
            </div>
        </div>
        </div>
        	<div class="footer-copyright">
            	<div class="container">
            		© 2016 - Valentín MT
            		<a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square"></i></a>
            		<a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square"></i></a>
            	</div>
          	</div>
    </footer>

	<script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.2/vue-resource.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
	@yield('scripts')
</body>

</html>