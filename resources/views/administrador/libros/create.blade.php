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
			 						<input type="hidden" name="editorial_id_editorial" value="1">
			 						<input type="hidden" name="idioma_id_idioma" value="1">
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
					<div class="col s12 l3">
				 		<div class="card-panel form-registro2">
				 			<center>
				 				<!-- Modal Trigger -->
								<a class="modal-trigger waves-effect waves-light btn cyan darken-3" href="#altaIdiomas">
									Nuevo idioma
								</a>
				 				<br><br>
						        <form action="#">
								    <div class="input-field col s12">
									    <select>
									    	<!--<option value="" disabled selected>Seleccionar...</option>-->
									    	@foreach($Idioma as $Idioma)
									    		<option value="1">{{ $Idioma->nombre }}</option>
									    	@endforeach
									    </select>
									    <label>Lista de idiomas</label>
									  </div>								    
								</form>
						        <hr>
						        <!-- Modal Trigger -->
								<a class="modal-trigger waves-effect waves-light btn cyan darken-3" href="#altaEditoriales">
									Nueva editorial
								</a>
				 				<br><br>
						        <form action="#">
								    <div class="input-field col s12">
									    <select>
									    	<!--<option value="" disabled selected>Seleccionar...</option>-->
									    	@foreach($Editorial as $Editorial)
									    		<option value="1">{{ $Editorial->nombre }}</option>
									    	@endforeach
									    </select>
									    <label>Lista de editoriales</label>
									  </div>								    
								</form>
						        <hr>
						        <!-- Modal Trigger -->
								<a class="modal-trigger waves-effect waves-light btn cyan darken-3" href="#altaAutores">
									Nuevo autor
								</a>
				 				<br><br>
						        <form action="#">
								    <div class="input-field col s12">
									    <select>
									    	<!--<option value="" disabled selected>Seleccionar...</option>-->
									    	@foreach($Autor as $Autor)
									    		<option value="1">{{ $Autor->nombre }}</option>
									    	@endforeach
									    </select>
									    <label>Lista de autores</label>
									  </div>								    
								</form>
				 			</center>
				 		</div>
					</div>
	 			</form>
		 	</div> 	
		</div>
	</center>
</div>

<!-- Modal Structure para idiomas-->
<form action="/administrador/libros/idiomas" method="POST" @submit.prevent="registrarIdioma">
	<!-- 
		@submit.prevent (controlador de evento). Manda a llamar al método que hará la opción de inserción en la base. 
		@ equivale a v-on (sintáxis de Vue).
	-->
	{{csrf_field()}}
	<div id="altaIdiomas" class="modal modal-fixed-footer">
		<div class="modal-content">
	    	<h4>Agregar nuevo idioma</h4>
	    	<br>
	      	<div class="row">
				<div class="input-field col s8">
					<input type="text" name="nombre" class="validate" required v-model="nuevoidioma.nombre" value="{{ old('nombre') }}"/>
					<!--objeto JSON: v-model="nuevoidioma.nombre", nuevoidioma (objeto) y nombre (atributo)-->
					<label id="texto" for="nombre">Nombre</label>
				</div>
			</div>
	    </div>
	    <div class="modal-footer">
	    	<div class="row">
	    		<!--<div class="col s6">
			  		<a href="/administrador/libros/create" class="btn waves-effect waves-light cyan darken-3">
						Cancelar
					</a>
				</div>-->
				<div class="col s12"> <!--v-show="nuevoidioma.nombre"-->
		    		<button class="btn waves-effect waves-light cyan darken-3" type="submit" name="action"
		    			onclick="Materialize.toast('Editorial agregado correctamente', 3000, 'rounded');">
			    		Guardar 
			  		</button>
		  		</div>
	    	</div>	
	    </div>
	</div>
</form>

<!-- Modal Structure para editoriales-->
<form action="/administrador/libros/editoriales" method="POST" @submit.prevent="registrarEditorial">
	{{csrf_field()}}
	<div id="altaEditoriales" class="modal modal-fixed-footer">
		<div class="modal-content">
	    	<h4>Agregar nueva editorial</h4>
	      	<div class="row">
				<div class="input-field col s8">
					<input type="text" name="nombre" class="validate" required v-model ="nuevoeditorial.nombre"value="{{ old('nombre') }}" />
					<label id="texto" for="nombre">Nombre</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s8">
						<input type="text" name="telefono" class="validate" v-model ="nuevoeditorial.telefono"value="{{ old('telefono') }}">
					    <label id="texto" for="telefono">Teléfono</label>
				</div>
			</div>
	    </div>
	    <div class="modal-footer">
	    	<div class="row">
	    		<!--<div class="col s6">
			  		<a href="/administrador/libros/create" class="btn waves-effect waves-light cyan darken-3">
						Cancelar
					</a>
				</div>-->
				<div class="col s12"> <!--v-show="nuevoeditorial.nombre"-->
		    		<button class="btn waves-effect waves-light cyan darken-3" type="submit" name="action"
		    			onclick="Materialize.toast('Editorial agregada correctamente', 3000, 'rounded');">
			    		Guardar 
			  		</button>
		  		</div>
	    	</div>	
	    </div>
	</div>
</form>

<!-- Modal Structure para autores-->
<form action="/administrador/libros/autores" method="POST" @submit.prevent="registrarAutor">
	{{csrf_field()}}
	<div id="altaAutores" class="modal modal-fixed-footer">
		<div class="modal-content">
	    	<h4>Agregar nuevo autor</h4>
	      	<div class="row">
				<div class="input-field col s8">
					<input type="text" name="nombre" class="validate" v-model="nuevoautor.nombre" value="{{ old('nombre') }}"/>
					<label id="texto" for="nombre">Nombre</label>
				</div>
			</div>
	    </div>
	    <div class="modal-footer">
	    	<div class="row">
	    		<!--<div class="col s6">
			  		<a href="/administrador/libros/create" class="btn waves-effect waves-light cyan darken-3">
						Cancelar
					</a>
				</div>-->
				<div class="col s12"> <!--v-show="nuevoautor.nombre"-->
		    		<button class="btn waves-effect waves-light cyan darken-3" type="submit" name="action"
		    			onclick="Materialize.toast('Autor agregado correctamente', 3000, 'rounded');">
			    		Guardar 
			  		</button>
		  		</div>
	    	</div>	
	    </div>
	</div>
</form>

@stop

@section('scripts')

<script >	
	//$(document.ready(function(){}));

	//JQUERY
	/*
	$(function(){ //Equivalente a utilizar ready.
		alert("Vamos a registrar");
	});
	*/

	//VUE JS
	Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
	//Se utiliza para poder tomar datos de frameworks externos, si se elimina únicamente podré utilizar laravel.
	new Vue({
		//Atributos.
		el: 'body', //Elemento sobre el que vamos a trabajar.
		data: {
			//titulo: ""
			nuevoidioma: { //Objeto.
				nombre:"", //Atributo.
			},
			nuevoeditorial: {
				nombre:"",
				telefono:"",
			},
			nuevoautor: {
				nombre:"",
			}
		},
		//Métodos.
		ready: function(){
			//alert("Hola Vue.js");
			//this.registrarAutor();
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
			},
			registrarEditorial: function(e){
				var nombre = this.nuevoeditorial;
				this.$http.post('/administrador/libros/editoriales', nombre);
				this.nuevoeditorial = {nombre:'', telefono:''};
			},
			registrarAutor: function(e){
				var nombre = this.nuevoautor;
				this.$http.post('/administrador/libros/autor', nombre);
				this.nuevoautor = {nombre:''};
			},
		},
	});
</script>

@stop