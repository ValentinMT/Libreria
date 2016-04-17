@extends('templates.website')

@section('content')

<div id="section2" class="container">
	<div class="row">
		<div class="col s12">
			<div class="col s6">
				<h4>Carrito de compras</h4>
			</div>
		</div>

		<div class="col s12">
    		<div class="col s6">
    			<form action="#">
    				<p>Su carrito de compras está vacío.</p>
    				<p>Cuando vea algo que desee añadir al carrito de compras, pulse:</p></br>
			       	<button class="btn waves-effect waves-light cyan darken-3" type="submit" name="action">
			    		<b>Añadir</b>  <i class="fa fa-cart-plus"></i> 
			  		</button>
			    </form>
			    <center>
    				</br><img class="responsive-img" src="/imagenes/book.png">
    			</center>
    			<p><b>Total de libros añadidos: 0</b></p>
    		</div>
    		<div class="col s6">
    			<center>
    				<img class="responsive-img" src="/imagenes/carrito1.png">
    			</center>
    		</div>
    	</div>
	</div>
</div>

@stop