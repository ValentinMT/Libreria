Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("#token").getAttribute('value');
new Vue({
	//Atributos.
	el: 'body', //Ambiente de trabajo de Vue.
	data: {
		cardIdioma: false,
		newIdioma: "",
		idiomas: [],
		cardAutor: false,
		newAutor: "",
		autores: [],
		cardEditorial: false,
		newEditorialNombre: "",
		newEditorialTelefono: "",
		editoriales: [],
		id_idioma: "",
		id_editorial: "",
		id_autor: []
	},
	// Metodos
	ready: function() {
		this.getIdiomas();
		this.getAutores();
		this.getEditoriales();
	},
	methods:{
		getIdiomas: function(){
			this.$http.get('/administrador/libros/create/idiomas').then(function(response){
				this.$set('idiomas', response.data);
			});
		},
		agregarIdioma: function(){
			this.cardIdioma = !this.cardIdioma;
		},
		storeIdioma: function(){
			//Petición AJAX.	
			this.$http.post('/administrador/libros/create/storeIdioma', {'nombre': this.newIdioma}).then(function(response){
				this.idiomas.push(response.data);
				Materialize.toast('Idioma registrado de forma correcta.', 3500, 'rounded')
				this.newIdioma = "";
			},function(error) {
				Materialize.toast('Ingresa un idioma válido, por favor.', 3500, 'rounded')
				this.newIdioma = "";
			});
		},
		removeIdioma: function(idioma){
			this.$http.post('/administrador/libros/create/deleteIdioma', {'id_idioma': idioma.id_idioma}).then(function(response){
				this.idiomas.$remove(idioma);
				Materialize.toast('Idioma eliminado de forma correcta', 3500, 'rounded')
			});
		},

		getAutores: function(){
			this.$http.get('/administrador/libros/create/autores').then(function(response){
				this.$set('autores', response.data);
			});
		},
		agregarAutor: function(){
			this.cardAutor = !this.cardAutor;
		},
		storeAutor: function(){
			//Petición AJAX.	
			this.$http.post('/administrador/libros/create/storeAutor', {'nombre': this.newAutor}).then(function(response){
				this.autores.push(response.data);
				Materialize.toast('Autor registrado de forma correcta.', 3500, 'rounded')
				this.newAutor = "";
			},function(error) {
				Materialize.toast('Ingresa un autor válido, por favor.', 3500, 'rounded')
				this.newAutor = "";
			});
		},
		removeAutor: function(autor){
			this.$http.post('/administrador/libros/create/deleteAutor', {'id_autor': autor.id_autor}).then(function(response){
				this.autores.$remove(autor);
				Materialize.toast('Autor eliminado de forma correcta', 3500, 'rounded')
			});
		},
		getEditoriales: function(){
			this.$http.get('/administrador/libros/create/editoriales').then(function(response){
				this.$set('editoriales', response.data);
			});
		},
		agregarEditorial: function(){
			this.cardEditorial = !this.cardEditorial;
		},
		storeEditorial: function(){
			//Petición AJAX.	
			this.$http.post('/administrador/libros/create/storeEditorial', {'nombre': this.newEditorialNombre, 'telefono': this.newEditorialTelefono}).then(function(response){
				this.editoriales.push(response.data);
				Materialize.toast('Editorial registrada de forma correcta.', 3500, 'rounded')
				this.newEditorialNombre = "";
				this.newEditorialTelefono = "";
			},function(error) {
				Materialize.toast('Ingresa una editorial válida, por favor.', 3500, 'rounded')
				this.newEditorialNombre = "";
				this.newEditorialTelefono = "";
			});
		},
		removeEditorial: function(editorial){
			this.$http.post('/administrador/libros/create/deleteEditorial', {'id_editorial': editorial.id_editorial}).then(function(response){
				this.editoriales.$remove(editorial);
				Materialize.toast('Editorial eliminada de forma correcta', 3500, 'rounded')
			});
		}
	}
});