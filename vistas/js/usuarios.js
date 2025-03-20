$('.modal-dialog').draggable({

  handle: ".modal-header"

});  
/*=====================================
=           SUBIENDO FOTO DEL USUARIO           =
======================================-*/
$(".nuevaFotoId").change(function(){  

	var imagen = this.files[0];
	
	//console.log("imagen", imagen);
	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".nuevaFotoId").val("");

		swal({
			title:"Error al subir la imagen",
			text:"¡La imagen debe estar en formato JPG o PNG",
			type:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(imagen["size"] > 2000000){

		$(".nuevaFotoId").val("");

		swal({  
			title:"Error al subir la imagen",
			text:"¡La imagen debe superar los 2 MB",
			type:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else{

		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load",function(event){
			var rutaImagen = event.target.result;
			$(".previsualizar").attr("src",rutaImagen);
		})
	}

})



/*--=====================================
=            EDITAR USUARIO         =
======================================--*/ 

//$(document).on("click",".btnEditarUsuario", function(){
$('.tablaUsuarios tbody').on("click",".btnEditarUsuario", function(){
	
	const idUsuario = $(this).attr("idUsuario");

	const datos = new FormData();
	datos.append("idUsuario", idUsuario);


	$.ajax({

		url:"ajax/usuarios.ajax.php",
		method :"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		beforeSend:function(o){

			$("#loading-max").fadeIn('slow/400/fast');
			
		}, 
				
		success:function(respuesta){

			$("#loading-max").fadeOut('slow/400/fast');

			$("#responsable_id").val(respuesta["idResponsable"]);
			$("#editarNombre").val(respuesta["responsable"]);
			$("#editarUsuario1").val(respuesta["usuario"]);
			$("#editarUsuario2").val(respuesta["usuario"]);
			$("#passwordActual").val(respuesta["password"]);
			$("#editarEmail").val(respuesta["email"]);
			$("#fotoActual").val(respuesta["foto"]);

			const idPerfil = respuesta["perfil_id"];
			const da = new FormData();
			da.append("idPerfil", idPerfil);

			$.ajax({
				url:"ajax/perfiles.ajax.php",
				type:"POST",
				data:da,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json", 
				
				success:function(respuesta){

					$("#editarPerfil").html(respuesta["perfil"]);
					$("#editarPerfil").val(respuesta["idPerfil"]);
				}

			});



			const idArea = respuesta["unidad_id"];
			const area = new FormData();
			area.append("idArea", idArea);

			$.ajax({
				url:"ajax/unidades.ajax.php",
				type:"POST",
				data:area,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json", 
				
				success:function(respuesta){

					$("#valorAreaId").html(respuesta["area"]);
					$("#valorAreaId").val(respuesta["idAreaVehiculo"]);
				}

			});





















		
			if(respuesta["foto"] != ""){

				$(".previsualizar").attr("src",respuesta["foto"]);
			}
		}

	}); 
	
});



/*--=====================================
=            ACTIVAR USUARIO            =
======================================--*/
$(document).on("click",".btnActivar", function(){

	let idUsuario = $(this).attr("idUsuario");
	// console.log("idUsuario", idUsuario);
	let idSesion = $(this).attr("idSesion");
	// console.log("idSesion", idSesion);

	let estadoUsuario = $(this).attr("estadoUsuario");
	// console.log("estadoUsuario", estadoUsuario);

	if(idUsuario == idSesion){

		Swal.fire({

			position:"center",
			title: "¡No te puedes cambiar de estado actual!",
			icon: "error",
			confirmButtonText:"¡Cerrar!"

		}).then(function(result){

			if(result.value){

				window.location = "usuarios";

			}

		});

	}else{

			let datos = new FormData();
			datos.append("activarId", idUsuario);
			datos.append("activarUsuario", estadoUsuario);

			$.ajax({
				url:"ajax/usuarios.ajax.php",
				method:"POST",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
				
					// if(window.matchMedia("(max-width:767px)").matches){

						Swal.fire({
							position:"center",
							title: "El usuario ha sido actualizado",
							icon: "success",
							confirmButtonText:"¡Cerrar!"
							}).then(function(result){
								if(result.value){
									window.location = "usuarios";
								}
							
						});
					// }

				}
			})

			if(estadoUsuario == 0){
				$(this).removeClass('btn-success');
				$(this).addClass('btn-danger');
				$(this).html("Desactivado");
				$(this).attr("estadoUsuario", 1);
			}else{
				$(this).removeClass('btn-danger');
				$(this).addClass('btn-success');
				$(this).html("Activado");
				$(this).attr("estadoUsuario",0);
			}

	}


});


/*--=====================================
=            VALIDAR USUARIO SI EXISTE          =
======================================--*/

$(".nuevoUsuario").change(function(){

	$(".alert").remove();

	let usuario = $(this).val();

	// console.log("usuario", usuario);
	
	let datos = new FormData();
	datos.append("validarUsuario", usuario);

	$.ajax({
		url: "ajax/usuarios.ajax.php",
		method:"POST", 
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			console.log("respuesta", respuesta);

			if(respuesta){
				$(".nuevoUsuario").parent().after('<div class="alert alert-danger">Este usuario ya existe en la base de datos!</div>');
				$(".nuevoUsuario").val('');
			}
		}

	})

})


/*--=====================================
=            VALIDAR EMail SI EXISTE          =
======================================--*/

$(".nuevoEmail").change(function(){

	$(".alert").remove();

	let email = $(this).val();
	let datos = new FormData();
	
	datos.append("validarEmail", email);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			// console.log("respuesta", respuesta);

			if(respuesta){
				$(".nuevoEmail").parent().after('<div class="alert alert-danger">¡ Este email ya existe en la base de datos !</div>');
				$(".nuevoEmail").val('');
			}
		}

	})

})


$("#editarEmail").change(function(){

	$(".alert").remove();

	let email = $(this).val();
	let datos = new FormData();
	datos.append("validarEmail", email);
	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			if(respuesta){
				$("#editarEmail").parent().after('<div class="alert alert-danger">¡ Este email ya existe en la base de datos !</div>');
				$("#editarEmail").val('');
			}
		}

	})

})




/*--=====================================
=       ELIMINAR USUARIO         =
======================================--*/

$(document).on("click",".btnEliminarUsuario", function(){


	let idUsuario = $(this).attr("idUsuario");
	
	let idSesion = $(this).attr("idSesion");
	


	if(idUsuario == idSesion){

		Swal.fire({

			position:"center",
			title: "¡No te puedes eliminar con tu perfil actual!",
			icon: "error",
			confirmButtonText:"¡Cerrar!"
			}).then(function(result){
				if(result.value){
					window.location = "usuarios";
				}
		
		});

	}else{
 
	let idUsuario = $(this).attr("idUsuario");
	let fotoUsuario = $(this).attr("fotoUsuario");
	let usuario = $(this).attr("usuario");

	Swal.fire({
		title:"¿Estas seguro de borrar el usuarios?",
		text:"Puede revertir este proceso cancelando",
		icon:"warning",
		showCancelButton:true,
		confirmButtonColor:"#3085d6",
		cancelButtonColor:"#d33",
		cancelButtonText: "CANCELAR",
		confirmButtonText: "SI, ¡ ELIMINAR !"

	}).then((result) => {
		
		if(result.isConfirmed){

			window.location= "index.php?ruta=usuarios&idUsuario="+idUsuario+"&usuario="+usuario+"&fotoUsuario="+fotoUsuario;
	
		}
	})

}

})




$(".btnNuevoPerfil").click(function(){

	$("#contenido-tabla-permisos").css("display","none");
	$("#contenido-nuevo").css("display","block");
	$(".btnNuevoPerfil").css("display","none");
})


$('.btnGuardarPermiso').click(function(){

	let permiso = $("#nuevoPerfilId").val();
	// console.log("permiso", permiso);
	let descrPermiso = $("#nuevoDescripcionPerfilId").val();
	// console.log("descrPermiso", descrPermiso);

	if(permiso == "" || descrPermiso == ""){

		Swal.fire({
			position:"center",
			title: "¡ Debes de agregar todos los datos !",
			icon: "error",
			confirmButtonText:"¡Cerrar!"
		});


	}else{



		let datos = new FormData();
		datos.append("permiso", permiso);
		datos.append("descrPermiso", descrPermiso);

		$.ajax({
			url:"ajax/perfiles.ajax.php",
			method:"POST",
			data:datos,
			cache:false,
			contentType:false,
			processData:false,
			dataType:"json",

			beforeSend:function(){

				$("#loading-max").fadeIn('slow');
			},

			success: function(respuesta){

				if(respuesta == "ok"){

					Swal.fire({
						position: "center",
						icon: "success",
						title: "El perfil ha sido guardado correctamente!",
						showConfirmButton: true,
						allowOutsideClick: false,
						confirmButtonText: "Aceptar"

					}).then((result)=> {

						if(result.value){

							window.location = "usuarios";
						}

					});

				}

				$("#loading-max").fadeOut('slow');
			}

	})


	
	}

})






$(".nuevoIdentificador").change(function(){

	$(".alert").remove();
	let categoria = $(this).val();
	let datos = new FormData();
	datos.append("categoria", categoria);

	$.ajax({
		url:"ajax/categorias.ajax.php",
		method:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			if(respuesta){
				$(".nuevoIdentificador").parent().after('<div class="alert alert-danger">¡ Este identificador ya existe en la base de datos !</div>');
				$(".nuevoIdentificador").val('');
			}
		}

	})

})




$(".editarIdentificador").change(function(){

	$(".alert").remove();
	let categoria = $(this).val();
	let datos = new FormData();
	datos.append("categoria", categoria);

	$.ajax({
		url:"ajax/categorias.ajax.php",
		method:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			if(respuesta){
				$(".editarIdentificador").parent().after('<div class="alert alert-danger">¡ Este identificador ya existe en la base de datos !</div>');
				$(".editarIdentificador").val('');
			}
		}

	})

})


$('.tablaCategoria tbody').on("click",".btnEditarCategoria", function(){

	let idIndentificador = $(this).attr("idCategoria");
	// console.log("idIndentificador", idIndentificador);

	let datos = new FormData();
	datos.append("idIndentificador", idIndentificador);


	$.ajax({
		url:"ajax/categorias.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType:"json",
		beforeSend:function(){

			$("#loading-max").fadeIn('slow');
		},

		success: function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loading-max").fadeOut('slow');

			$("#editarIdentificadorId").val(respuesta["categoria"]);
			$("#identificadorId").val(respuesta["idCategoria"]);


		}

	})

});





/*--=====================================
          USUARIO AUTORIZADOR          
======================================--*/
$(".tablaUsuarios tbody").on("click",".btnNuevoAutorizador", function(){

	let idUsuario = $(this).attr("idUsuario");
	
	let datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		beforeSend: function(){
			$("#loading-max").fadeIn('slow');
		},
		success: function(respuesta){
			// console.log("respuesta", respuesta);

			$("#nombreUsuarioId").html(respuesta["responsable"]);
			$("#idAutorizaUsrId").val(respuesta["idResponsable"]);

			$("#loading-max").fadeOut('slow');
		}
	})
});



$(".tablaUsuarios tbody").on("click",".btnCambiarAutorizador", function(){

	let idUsuario = $(this).attr("idUsuario");
	
	let datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		beforeSend: function(){
			$("#loading-max").fadeIn('slow');
		},
		success: function(respuesta){
			
			console.log("respuesta", respuesta);

			$("#nombreCambiarUsuarioId").html("Usuario: "+ respuesta["responsable"]);
			$("#idAutorizaCambiarUsrId").val(respuesta["idResponsable"]);

			$("#loading-max").fadeOut('slow');
		}
	})
});


