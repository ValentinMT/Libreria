<div class="card-panel form-registro3" v-if="cardIdioma">
	<center>
		<img class="responsive-img" src="/imagenes/lineas.png">
		<label><b>TECLEE EL IDIOMA</b></label><br>
		<label>Enter para registrar</label>
	</center>
	<div class="row">
		<div class="input-field col s12">
			<input type="text" class="validate" v-model="newIdioma" v-on:keyup.enter="storeIdioma" placeholder="Nombre idioma">
		</div>
	</div>
</div>

<div class="card-panel form-registro3" v-if="cardAutor">
	<center>
		<img class="responsive-img" src="/imagenes/lineas.png">
		<label><b>TECLEE EL AUTOR</b></label><br>
		<label>Enter para registrar</label>
	</center>
	<div class="row">
		<div class="input-field col s12">
			<input type="text" class="validate" v-model="newAutor" v-on:keyup.enter="storeAutor" placeholder="Nombre autor">
		</div>
	</div>
</div>

<div class="card-panel form-registro3" v-if="cardEditorial">
	<center>
		<img class="responsive-img" src="/imagenes/lineas.png">
		<label><b>TECLEE EL EDITORIAL</b></label><br>
		<label>Enter para registrar</label>
	</center>
	<div class="row">
		<div class="input-field col s6">
			<input type="text" class="validate" v-model="newEditorialNombre" placeholder="Nombre">
		</div>
		<div class="input-field col s6">
			<input type="text" class="validate" v-model="newEditorialTelefono" v-on:keyup.enter="storeEditorial" placeholder="Teléfono">
		</div>
	</div>
</div>