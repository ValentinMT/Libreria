@extends('templates.website')

@section('content')

<div id="section2" class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
		 		<h4>Libros disponibles</h4>
		 		<hr>

		 		<div class="row">
			        <div class="col s4" v-for="libro in libros">
			        	<div class="card">
			            	<div class="card-content">
			              		<span class="card-title">@{{libro.nombre}}</span>
			              		<br>
			              		<img id="imagenLibro" src="@{{libro.imagen}}">
								<br>				
								<label><b>Edición:</b> @{{libro.edicion}}</label>
								<br>
								<label><b>Nº de páginas:</b> @{{libro.paginas}}</label>
								<br>
								<label><b>Precio:</b> $@{{libro.precio}}</label>
								<br>
								<label><b>ISBN:</b> @{{libro.isbn}}</label>
								<br>
								<label><b>Idioma:</b> @{{libro.idioma_id_idioma}}</label>
								<br>
								<label><b>Editorial:</b> @{{libro.editorial_id_editorial}}</label>
								<br>
								<label><b>Descuento:</b> -$@{{libro.descuento}}</label>
								<br>
			            	</div>
			          	</div>
			        </div>
			    </div>
		 		<!--<p v-for="libro in libros">
		 			<label style="font-size: 20px;"><b>Título: @{{libro.nombre}}</b></label>
					<br>
					<img id="imagenLibro" src="@{{libro.imagen}}">
					<br>				
					<label><b>Edición:</b> @{{libro.edicion}}</label>
					<br>
					<label><b>Nº de páginas:</b> @{{libro.paginas}}</label>
					<br>
					<label><b>Precio:</b> $@{{libro.precio}}</label>
					<br>
					<label><b>ISBN:</b> @{{libro.isbn}}</label>
					<br>
					<label><b>Idioma:</b> @{{libro.idioma_id_idioma}}</label>
					<br>
					<label><b>Editorial:</b> @{{libro.editorial_id_editorial}}</label>
					<br>
					<label><b>Descuento:</b> -$@{{libro.descuento}}</label>
					<br>
				</p>-->
				<hr>
		 	</div>
		</div>
	</center>
</div>


@stop

@section('scripts')
	<script>
		Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
		new Vue({
			//Atributos.
			el: 'body', //Ambiente de trabajo de Vue.
			data: {
				libros: [],
			},
			// Metodos
			ready: function() {
				this.getLibros();
			},
			methods:{
				getLibros: function(){
					this.$http.get('/tienda/libros').then(function(response){
						this.$set('libros', response.data);
					});
				},
			}
		});
	</script>
@stop