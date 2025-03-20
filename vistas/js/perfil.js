$(".tablaPerfiles tbody").on("click", ".btnEditarPerfilSistema", function(){

	const idPerfil = $(this).attr("idPerfilSistema");
	 
	let datos = new FormData();
	datos.append("idPerfil", idPerfil);


	$.ajax({
		url:"ajax/perfiles.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		beforeSend:function(){
			$("#loading-max").fadeIn('slow');
		},
		success: function(respuesta){

			$("#loading-max").fadeOut('slow');

			$("#editarPerfilId").val(respuesta["perfil"]);
			$("#editarDescripcionPerfilId").val(respuesta["observaciones"]);
			$("#editarValorPerfilId").val(respuesta["idPerfil"]);

			// console.log("respuesta", respuesta);

		}

	})



})



$(".tablaPerfiles tbody").on("click", ".btnEliminarPerfilSistema", function(){

	const idPerfil = $(this).attr("idPerfilSistema");


		Swal.fire({
		title:"¿Estas seguro de borrar el perfil?",
		text:"Puede revertir este proceso cancelando",
		icon:"warning",
		showCancelButton:true,
		confirmButtonColor:"#3085d6",
		cancelButtonColor:"#d33",
		cancelButtonText: "CANCELAR",
		confirmButtonText: "SI, ¡ BORRAR PERFIL !"

	}).then((result) => {
		
		if(result.isConfirmed){

			window.location = "index.php?ruta=perfiles&qd="+idPerfil;
	
		}
	})


	});



