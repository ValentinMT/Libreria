<!DOCTYPE html>

<html lang="en">

<head>
	<meta 'charset=UTF-8'>
	<title>Librería</title>
	<!-- Latest compiled and minified CSS -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<nav>
	  	<div class="nav-wrapper">
	    	<a href="" class="brand-logo">Librería</a>
	    	<ul id="nav-mobile" class="right hide-on-med-and-down">
	     		<li><a href=""><i class="material-icons left">web</i>Inicio</a></li>
	      		<li><a href=""><i class="material-icons left">shopping_cart</i>Comprados<span class="new badge">4</span></a></li>
	      		<li><a href=""><i class="material-icons left">power_settings_new</i>Salir</a></li>
	    	</ul>
	  	</div>
	</nav><br><br>

	<div class="row">
		<table><tr>
		<th>
		<div aligne=center class="col s10 offset-s1">
			<span class="">
    			<table class="striped">
			        <thead>
			          <tr>
			              <th data-field="id"><i class="material-icons left">perm_identity</i>Nombre</th>
			              <th data-field="name"><i class="material-icons left">person_pin</i>Nick</th>
			              <th data-field="price"><i class="material-icons left">email</i>Email</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>Valentín Torres</td>
			            <td>valentin93</td>
			            <td>valen_tin.1993@hotmail.com</td>
			          </tr>
			          <tr>
			            <td>Octavio Alvarez</td>
			            <td>ache19</td>
			            <td>octavio_alvarezz@hotmail.com</td>
			          </tr>
			          <tr>
			            <td>Yolanda Torres</td>
			            <td>yolistc</td>
			            <td>yolistc_comala@hotmail.com</td>
			          </tr>

			          <tr>
			            <td>Mariana Reyes</td>
			            <td>marianaM</td>
			            <td>RMariana@hotmail.com</td>
			          </tr>
			        </tbody>
			    </table>
			</span>
		</div>
		</th>

		<th>
		<div aligne=center class="col s10 offset-s1">
			<span class="">
				<form action="/form" method="POST">
					<label><i class="material-icons left">perm_identity</i>Nombre: </label>
					<input type="text" name="nombre"/><br>

					<label><i class="material-icons left">person_pin</i>Nick: </label>
					<input type="text" name="nick"/><br>

					<label><i class="material-icons left">email</i>Email: </label>
					<input type="email" name="email"/><br>

					<label><i class="material-icons left">lock_outline</i>Password: </label>
					<input type="password" name="password"/><br>

					<label><i class="material-icons left">phone</i>Teléfono: </label>
					<input type="text" name="telefono"/><br>

					<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    					<i class="material-icons right">send</i>
  					</button>
				</form>
			</span>
		</div>
		</th>

		<th>
			<div class="col s10 offset-s1">
    			<div class="card-image waves-effect waves-block waves-light">
			    	<img class="activator" src="/imagenes/Libros.jpg">
				</div>
			</div>
		</th>
		</tr></table><br><br>
	</div>
            
		<!--<form action="/form" method="POST">
			
			<label>Nombre: </label>
			<input type="text" name="nombre"/>

			<label>Email: </label>
			<input type="email" name="email"/>

			<input type="submit" value="Enviar"/>
		</form>-->
		<!--<form action="/form" method="POST">
			
			<label>Nombre: </label>
			<input type="text" name="nombre"/><br>

			<label>Nick: </label>
			<input type="text" name="nick"/><br>

			<label>Email: </label>
			<input type="email" name="email"/><br>

			<label>Password: </label>
			<input type="password" name="password"/><br>

			<label>Teléfono: </label>
			<input type="text" name="telefono"/><br>

			<input type="submit" value="Enviar"/>
		</form>-->
</body>

</html>