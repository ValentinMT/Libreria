@extends('templates.administrador')

@section('content')

<div id="section2" class="container">
	<center>
		<div class="row">
		 	<div class="col s12">
		 		<h4><center>Panel de administración de libros</center></h4>
		 		<a href="/administrador" style="color:#006064"><b>Menú principal</b></a>
		 		<span class="separador">|</span>
		 		<a href="/administrador/libros" style="color:#006064"><b>Libros</b></a>
		 		<span class="separador">|</span>
		 		<a class="activeMenu" style="color:#006064"><b>Registrar libro</b></a>
		 	</div>

		 	<div class="row">
		 		<div class="col s8">
		 			<center>
		 				<h5><b>Registrar libro</b></h5>
		 				<!--<label>@{{titulo}}</label>-->
		 			</center>	
		 		</div>
		 	</div>

		 	<div class="row">
	 			<form action="/administrador/libros" method="POST" enctype="multipart/form-data">
	 				{{csrf_field()}}
	 				<div class="col s12 l9">
	 					<div class="card-panel form-registro">
			 				<div class="row">
			 					<div class="input-field col s12">
			 						<input type="text" name="nombre" v-model="titulo" class="validate">
		      						<label id="texto" for="nombre"><i class="fa fa-book" aria-hidden="true"></i> Título del libro</label>
			 					</div>
			 				</div>
			 				<div class="row">
			 					<div class="input-field col s8">
			 						<input type="text" name="edicion" class="validate">
		      						<label id="texto" for="edicion"><i class="fa fa-hashtag" aria-hidden="true"></i> Edición</label>
			 					</div>
			 					<div class="input-field col s4">
			 						<input type="text" name="paginas" class="validate">
		      						<label id="texto" for="paginas"><i class="fa fa-file-text" aria-hidden="true"></i> Páginas</label>
			 					</div>
			 				</div>
			 				<div class="row">
			 					<div class="input-field col s4">
			 						<input type="text" name="precio" class="validate">
		      						<label id="texto" for="precio"><i class="fa fa-usd" aria-hidden="true"></i> Precio</label>
			 					</div>
			 					<div class="input-field col s8">
			 						<input type="text" name="isbn" class="validate">
		      						<label id="texto" for="isbn"><i class="fa fa-key" aria-hidden="true"></i> ISBN</label>
			 					</div>
			 				</div>
			 				<div class="row">
			 					<div class="input-field col s5">
			 						<input type="text" name="descuento" class="validate">
		      						<label id="texto" for="descuento"><b>-</b><i class="fa fa-usd" aria-hidden="true"></i> Descuento</label>
			 					</div>
			 					<div class="col s7">
			 						<div class="file-field input-field">
							      		<div id="boton-agregar" class="btn waves-effect waves-light cyan darken-1">
							        		<span>Imagen</span>
							        		<input type="file" name="image">
							      		</div>
							      		<div class="file-path-wrapper">
							        		<input class="file-path validate" type="text">
							      		</div>
							    	</div>
			 					</div>
			 				</div>
			 				<div class="row">
			 					<div class="col s12">
			 						<input type="hidden" name="idioma_id_idioma" value="@{{id_idioma}}">
			 						<input type="hidden" name="editorial_id_editorial" value="@{{id_editorial}}">
			 						<input type="hidden" name="autor_id_autor" value="@{{id_autor}}">
				 					<div class="col s6">
				 						<a href="/administrador/libros" class="btn waves-effect waves-light cyan darken-3">
				 							Cancelar
				 						</a>
				 					</div>
				 					<div class="col s6">
				 						<button type"submit" class="btn waves-effect waves-light cyan darken-3">
				 							Guardar
				 						</button>
				 					</div>
			 					</div>
			 				</div>
						</div>
					</div>
	 			</form>

 				<div class="col s12 l3">
 					@include('administrador.libros.cards')
 					<!--@{{ id_idioma }}-->
 					<!--@{{ id_editorial }}-->
 					<!--@{{ id_autor }}-->
 					<div class="card-panel form-registro2">
 						<center>
		    				<img class="responsive-img" src="/imagenes/lineas.png">
		    			</center>
 						<ul class="collapsible" data-collapsible="accordion">
							<li>
						      	<div class="collapsible-header"><!--<i class="fa fa-language" aria-hidden="true"></i>-->
						      		<b>IDIOMAS <i class="fa fa-arrow-down" aria-hidden="true"></i></b>
						      	</div>
						      	<div class="collapsible-body">
						      		<div class="row">
							      		<p class="agregaIdioma">
							      			<center>
							      				<br>
									      		<a href="#!" class="agregaIdioma modal-trigger waves-effect waves-light btn cyan darken-3" v-on:click="agregarIdioma">
									      			Nuevo idioma
									      		</a>
									      	</center>
							      		</p>
						      		</div>
						      		<div class="row">
							      		<p class="itemsIdioma left" v-for="idioma in idiomas">
						      				<input class="with-gap" name="group1" type="radio" id="test1@{{$index}}" value="@{{idioma.id_idioma}}" v-model="id_idioma"/>
								      		<label for="test1@{{$index}}">@{{idioma.nombre}}</label>
								      		<button v-on:click="removeIdioma(idioma)" class="remover-idioma">
								      			<i class="fa fa-trash" aria-hidden="true"></i>
								      		</button>
									    </p>
									</div>
						      	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><!--<i class="fa fa-book" aria-hidden="true"></i>-->
						      		<b>EDITORIALES <i class="fa fa-arrow-down" aria-hidden="true"></i></b>
						      	</div>
						      	<div class="collapsible-body">
						      		<div class="row">
							      		<p class="agregaEditorial">
							      			<center>
							      				<br>
									      		<a href="#!" class="agregaEditorial modal-trigger waves-effect waves-light btn cyan darken-3" v-on:click="agregarEditorial">
									      			Nuevo editorial
									      		</a>
									      	</center>
							      		</p>
							      	</div>
							      	<div class="row">
							      		<p class="itemsEditorial left" v-for="editorial in editoriales">
						      				<input class="with-gap" name="group2" type="radio" id="test2@{{$index}}" value="@{{editorial.id_editorial}}" v-model="id_editorial"/>
								      		<label for="test2@{{$index}}">@{{editorial.nombre}}</label>
								      		<button v-on:click="removeEditorial(editorial)" class="remover-editorial">
								      			<i class="fa fa-trash" aria-hidden="true"></i>
								      		</button>
									    </p>
									</div>
						      	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header active"><!--<i class="fa fa-users" aria-hidden="true"></i>-->
						      		<b>AUTORES <i class="fa fa-arrow-down" aria-hidden="true"></i></b>
						      	</div>
						      	<div class="collapsible-body">
						      		<div class="row">
							      		<p class="agregaAutor">
							      			<center>
							      				<br>
									      		<a href="#!" class="agregaAutor modal-trigger waves-effect waves-light btn cyan darken-3" v-on:click="agregarAutor">
									      			Nuevo autor
									      		</a>
									      	</center>
							      		</p>
							      	</div>
							      	<div class="row">
							      		<p class="itemsAutor left" v-for="autor in autores">
						      				<input class="with-gap" name="group3" type="checkbox" id="test3@{{$index}}" value="@{{autor.id_autor}}" v-model="id_autor"/>
						      				<!--<input class="with-gap" name="group3" type="checkbox" id="test3@{{$index}}"/>-->
								      		<label for="test3@{{$index}}">@{{autor.nombre}}</label>
								      		<button v-on:click="removeAutor(autor)" class="remover-autor">
								      			<i class="fa fa-trash" aria-hidden="true"></i>
								      		</button>
									    </p>
									</div>
						      	</div>
						    </li>
						</ul>
 					</div>
				</div>
		 	</div> 	
		</div>
	</center>
</div>

@stop

@section('scripts')

	<script src="/js/admin.js"></script>

<!--<script >	
	//$(document.ready(function(){}));

	//JQUERY
	/*
	$(function(){ //Equivalente a utilizar ready.
		alert("Vamos a registrar");
	});
	*/

	//VUE JS
	Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
	//Se utiliza para poder tomar datos de frameworks externos, si se elimina únicamente podrá utilizarse Laravel.
	new Vue({
		//Atributos.
		el: 'body', //Elemento sobre el que vamos a trabajar.
		data: {
			//titulo: ""
			nuevoidioma: { //Objeto1.
				nombre:"", //Atributo1.
			},
			nuevoeditorial: { //Objeto2.
				nombre:"", //Atributo1.
				telefono:"", //Atributo2.
			},
			nuevoautor: { //Objeto3.
				nombre:"", //Atributo1.
			}
		},
		//Métodos.
		ready: function(){
			//alert("Hola Vue.js");
			//this.registrarIdioma();
		},
		methods: {
			registrarIdioma: function(e){
				e.preventDefault();
				//Se extrae todo lo que contiene el objeto JSON creado (nuevoidioma),
				//y se almacena en una variable tipo var.
				var nombre = this.nuevoidioma;
				//Después se manda dicha variable (contiene la información) por AJAX a la ruta.
				//Por ello Laravel necesita comprobar con una llave de toquen que la info. es válida.
				this.$http.post('/administrador/libros/idiomas', nombre);
				//Se limpia la información de los atributos con AJAX.
				this.nuevoidioma = {nombre:''};
				Materialize.toast('Idioma agregada correctamente', 3000, 'rounded');
				$('#altaIdiomas').closeModal();
			},
			registrarEditorial: function(e){
				var nombre = this.nuevoeditorial;
				this.$http.post('/administrador/libros/editoriales', nombre);
				this.nuevoeditorial = {nombre:'', telefono:''};
				Materialize.toast('Editorial agregada correctamente', 3000, 'rounded');
				$('#altaEditoriales').closeModal();
			},
			registrarAutor: function(e){
				var nombre = this.nuevoautor;
				this.$http.post('/administrador/libros/autores', nombre);
				this.nuevoautor = {nombre:''};
				Materialize.toast('Autor agregado correctamente', 3000, 'rounded');
				$('#altaAutores').closeModal();
			},
		},
	});
</script>-->

@stop