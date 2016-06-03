@extends('templates.website')

@section('content')

<div id="section2" class="container">
	<div id="app">
		<center>
			<div class="row">
			 	<div class="col s12">
			 		<h4>Libros disponibles</h4>
			 		<hr>

			 		<div class="row">
			 			<?php
							$contador = 1;
						?>
						@foreach($libros as $libro)
					        <div class="col s4"> <!--v-for="libro in libros">-->
					        	<div class="card">
					            	<div class="card-content" v-on:click="mostrar({{$libro->id_libro}})">
					            		<span class="card-title"><b>#</b> {{$contador++}}</span>
										<br>
					              		<span class="card-title">{{$libro->nombre}}</span>
					              		<br>
										<b>Precio:</b> ${{$libro->precio}}.00
										<br>
										<img id="imagenLibro" src="{{$libro->imagen}}">
										<br>
										<b>Idioma:</b> {{$libro->idioma}}
										<br>
										<button class="btn waves-effect waves-light cyan darken-3">Agregar a carrito</button>
										<br>
											<a href="#!" v-on:click="mostrar({{$libro->id_libro}})">Ver detalles</a>
										<br>
					            	</div>
					          	</div>
					        </div>
					    @endforeach
				    </div>
					<hr>
					<center>
						<!--{!! $libros->render() !!}--> {{--coloca la numeracion--}}
					</center>
			 	</div>
			</div>
		</center>

		<div class="row">
			<div id="detalle" class="modal">
			    <div class="modal-content">
			      <h4>@{{titulo}}</h4>
			      <p>
			      		<hr>
			      		<b>Edición: </b>@{{edicion}}
			      		<br>
			      		<b>Páginas: </b>@{{paginas}}
			      		<br>
			      		<b>Precio: </b>$@{{precio}}.00
			      		<br>
			      		<b>ISBN: </b>@{{isbn}}
			      		<br>
			      		<b>Editorial: </b>@{{editorial}}
			      		<br>
			      		<b>Idioma: </b>@{{idioma}}
			      		<br>
			      		<hr>
			      		<b>Autores: </b>
			      		<p v-for="autor in autores">
			      			@{{autor.nombre}}
			      		</p>
			      </p>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			    </div>
			</div>
		</div>
	</div>
</div>


@stop


@section('scripts')
	<script>
		new Vue({
			el: '#app',
			data: {
				titulo: "",
				edicion: "",
				paginas: "",
				precio: "",
				isbn: "",
				editorial: "",
				idioma: "",
				autores: [],
			},

			/*
			ready: function(){
				alert()
			},
			*/

			methods: {
				mostrar: function(id_libro){
					//alert(id_libro);
					this.$http.get('/detalle-libro', {id_libro:id_libro}).then(function(response){
						//console.log(response.data)
						this.titulo = response.data.libro.nombre;
						this.edicion = response.data.libro.edicion;
						this.paginas = response.data.libro.paginas;
						this.precio = response.data.libro.precio;
						this.isbn = response.data.libro.isbn;
						this.editorial = response.data.libro.editorial;
						this.idioma = response.data.libro.idioma;
						this.autores = response.data.autores;
						$('#detalle').openModal();
					});
				}

			}
		})
	</script>
@stop
<!--@section('scripts')
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
@stop-->