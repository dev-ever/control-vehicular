
$(".tablaAreas tbody").on("click",".btnEditarUnidad", function(){

	const idUnidad = $(this).attr("idUnidad");
	console.log("idUnidad", idUnidad);

	let datos = new FormData();
	datos.append("idArea", idUnidad);


	$.ajax({
		url:"ajax/unidades.ajax.php",
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

			$("#editarNombreNegocioId").val(respuesta["area"]);
			$("#valorIdNegocio").val(respuesta["idAreaVehiculo"]);

		}

	})


})  


$(".tablaAreas tbody").on("click", ".btnEliminarUnidad", function(){

	const unidad_id = $(this).attr("idUnidad");
	

		Swal.fire({
			title:"¿Estas seguro de borrar la unidad de negocio?",
			text:"Puede revertir este proceso cancelando",
			icon:"warning",
			showCancelButton:true,
			confirmButtonColor:"#3085d6",
			cancelButtonColor:"#d33",
			cancelButtonText: "CANCELAR",
			confirmButtonText: "SI, ¡ BORRAR UNIDAD !"

		}).then((result) => {
			
			if(result.isConfirmed){

				window.location = "index.php?ruta=unidad-negocios&q="+unidad_id;
		
			}
		});

	});

