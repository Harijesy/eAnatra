

function Alert() {
	
	this.required_fields = function(){
		Swal.fire({
			position: 'center',
			icon: 'error',
			confirmButtonColor:'red',
			title: 'ERREUR',
			text: 'Certains champs sont obligatoire !',
			showConfirmButton:true,
		}) ;	
	}

	this.action_succed = function(){
		Swal.fire({
			size:'small',
			position: 'center',
			icon: 'success',
			title: 'SUCCES',
			text:"Enregistrement effectué",
			showConfirmButton: true,
		}) ;
	}

	this.action_modified = function(){
		Swal.fire({
			size:'small',
			position: 'center',
			icon: 'success',
			title: 'SUCCES',
			text:"Modification effectuée",
			showConfirmButton: true,
		}) ;
	}

	this.action_deleted = function(uri,data_obj){
		Swal.fire({
			size:'small',
			position: 'center',
			icon: 'success',
			title: 'SUCCES',
			text:"Suppression effectuée",
			showConfirmButton: true,
		}) ;
	}

	this.server_error = function() {
		Swal.fire({
			position: 'center',
			icon: 'warning',
			title: 'ERREUR',
			text: 'Erreur de connexion au serveur !',
			showConfirmButton: true

		}) ;
	}


	this.existed_error = function() {
		Swal.fire({
			position: 'center',
			icon: 'warning',
			title: 'ERREUR',
			text: 'Cette section existe déjà !',
			showConfirmButton: true

		}) ;
	}


	this.action_denied = function() {
		Swal.fire({
			position: 'center',
			icon: 'warning',
			title: 'ERREUR',
			text: 'Cette action n\'a pas aboutit !',
			showConfirmButton: true

		}) ;
	}



	this.empty = function(val) {
		Swal.fire({
			position: 'center',
			icon: 'warning',
			title: 'ERREUR',
			text: val,
			showConfirmButton: true ,
		}) ;
	}
	this.custom_success = function(val){
		Swal.fire({
			size:'small',
			position: 'center',
			icon: 'success',
			title: 'SUCCES',
			text: val,
			showConfirmButton: true,
		}) ;
	}


	this.request_verification = function() {
		Swal.fire({
			position: 'center',
			icon: 'warning',
			title: 'ERREUR',
			text: "Veuillez réessayer votre requête !",
			showConfirmButton: true

		}) ;
	}

}


