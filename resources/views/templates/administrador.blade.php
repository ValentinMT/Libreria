<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Librería</title>
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
		    	<a href="/administrador" class="brand-logo" style="margin-left: 20px">Librería <i class="fa fa-book"></i></a>
		      	<a href="/" data-activates="mobile-demo" class="button-collapse" style="margin-left: 20px"><i class="fa fa-bars"></i></a>
		      	<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#!">{{ session()->get('administrador')->nombre }}</a></li>
			        <li><a href="/logout" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			    </ul>
			    <ul class="side-nav" id="mobile-demo">
			        <!--<li><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i>  Salir</a></li>-->
			        <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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
                		Librería <i class="fa fa-book"></i>
                	</h4>
                	<p class="grey-text text-lighten-4">Leer es una experiencia de vida.</p>
              	</div>
            <div class="col l4 offset-l2 s12">
                <h4 class="white-text">Enlaces</h4>
                <ul>
                  	<li><a class="grey-text text-lighten-3" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>  Salir</a></li>
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
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
</body>

</html>