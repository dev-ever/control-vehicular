/*==============================================================
   LLAMADOS DE DATOS EN EVENTO CHANGE EN DATOS DEL VEHICULO 
==============================================================*/
$("#identidadVehiculoId").change(function(){

	let idVehiculo = $(this).val();
	// console.log("idVehiculo", idVehiculo);

	let datos = new FormData(); 
	datos.append('idVehiculo', idVehiculo);


	$.ajax({

		url:"ajax/vehiculos.ajax.php",
        method:"POST",
        data:datos,
        cache: false, 
        contentType: false,
        processData: false,
        dataType: "json",
        beforeSend:function(){

        	$("#framePDFVehiculo").attr("src","");
			$("#loaderVehiculo").fadeIn('slow');
			$('#loaderVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
        success:function(respuesta){

        	$("#info").html("");
        	$("#fileFacturaVehiculo").val("");

        	$("#infoPoliza").html("");
        	$("#filePolizaVehiculo").val("");

        	$("#infoTenencia").html("");
        	$("#fileTenenciaVehiculo").val("");

        	$("#infoVerificacion").html("");
        	$("#fileVerificacionVehiculo").val("");

        	$("#infoPedimento").html("");
        	$("#filePedimentoVehiculo").val("");

        	$("#infoTarjeta").html("");
        	$("#fileTarjetaVehiculo").val("");

        	$("#infoGarantia").html("");
        	$("#fileGarantiaVehiculo").val("");

        	$("#infoPermiso").html("");
        	$("#filePermisoVehiculo").val("");

        	$("#infoCompraVenta").html("");
        	$("#fileCompraVentaVehiculo").val("");

        	$("#infoUltimoTramite").html("");
        	$("#fileUltimoTramiteVehiculo").val("");

        	$("#infoFacturaOrigen").html("");
        	$("#fileFacturaOrigenVehiculo").val("");

        	$("#idVehiculo").val(respuesta["idVehiculo"]);
        	$("#folioVehiculo").val(respuesta["folio"]);
        	$("#loaderVehiculo").hide();
        	$("#docs").html("<b>Serie: </b>"+ respuesta["serie"]);
        	$("#vehiculoCombo").html(respuesta["serie"]);

        	//let vehiculo_id = respuesta["idVehiculo"];

        	let datos2 = new FormData();
        	datos2.append('vehiculo_id', idVehiculo);

				$.ajax({
					url:"ajax/documentacion-vehiculos.ajax.php",
			        method:"POST",
			        data:datos2,
			        cache: false,  
			        contentType: false,
			        processData: false,
			        dataType: "json",
			        beforeSend:function(){

			        	$("#framePDFVehiculo").attr("src","");
						$("#loaderVehiculo").fadeIn('slow');
						$('#loaderVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		 

					},

			        success:function(respuesta){
			        	// console.log("respuesta", respuesta);

						//--------------------------------------------------------------------------- 
			        	if(respuesta["checkFactura"] == "1"){

			        		$("#respuestaFacturaVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaFacturaPrevia").html('<a id="urlFacturaVehiculo" href="'+respuesta["factura"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaFacturaVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaFacturaPrevia").html("<a id='urlFacturaVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

        					$("#info").val("");
        					$("#fileFacturaVehiculo").val("");

			        	}

			        	if(respuesta["checkPoliza"] == "1"){

			        		$("#respuestaPolizaVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaPolizaPrevia").html('<a id="urlPolizaVehiculo" href="'+respuesta["poliza"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaPolizaVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaPolizaPrevia").html("<a id='urlPolizaVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}

			        	if(respuesta["checkTenencia"] == "1"){

			        		$("#respuestaTenenciaVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaTenenciaPrevia").html('<a id="urlTenenciaVehiculo" href="'+respuesta["tenencia"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaTenenciaVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaTenenciaPrevia").html("<a id='urlTenenciaVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}


			        	if(respuesta["checkVerificacion"] == "1"){

			        		$("#respuestaVerificacionVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaVerificacionPrevia").html('<a id="urlVerificacionVehiculo" href="'+respuesta["verificacion"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaVerificacionVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaVerificacionPrevia").html("<a id='urlVerificacionVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}


			        	if(respuesta["checkPedimento"] == "1"){

			        		$("#respuestaPedimentoVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaPedimentoPrevia").html('<a id="urlPedimentoVehiculo" href="'+respuesta["pedimento"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaPedimentoVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaPedimentoPrevia").html("<a id='urlPedimentoVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}


			        	if(respuesta["checkTarjeta"] == "1"){

			        		$("#respuestaTarjetaVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaTarjetaPrevia").html('<a id="urlTarjetaVehiculo" href="'+respuesta["tarjeta"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaTarjetaVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaTarjetaPrevia").html("<a id='urlTarjetaVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}

			        	if(respuesta["checkGarantia"] == "1"){

			        		$("#respuestaGarantiaVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaGarantiaPrevia").html('<a id="urlGarantiaVehiculo" href="'+respuesta["garantia"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaGarantiaVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaGarantiaPrevia").html("<a id='urlGarantiaVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}


			        	if(respuesta["checkPermiso"] == "1"){

			        		$("#respuestaPermisoVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaPermisoPrevia").html('<a id="urlPermisoVehiculo" href="'+respuesta["permiso"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaPermisoVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaPermisoPrevia").html("<a id='urlPermisoVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}


			        	if(respuesta["checkCompraVenta"] == "1"){

			        		$("#respuestaCompraVentaVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaCompraVentaPrevia").html('<a id="urlCompraVentaVehiculo" href="'+respuesta["compraVenta"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaCompraVentaVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaCompraVentaPrevia").html("<a id='urlCompraVentaVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}

			        	 if(respuesta["checkUltimoTramite"] == "1"){

			        		$("#respuestaUltimoTramiteVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaUltimoTramitePrevia").html('<a id="urlUltimoTramiteVehiculo" href="'+respuesta["ultimoTramite"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaUltimoTramiteVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaUltimoTramitePrevia").html("<a id='urlUltimoTramiteVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}


			        	 if(respuesta["checkFacturaOrigen"] == "1"){

			        		$("#respuestaFacturaOrigenVehiculo").html("<i class='fa fa-check text-success'></i>");
        					$("#respuestaFacturaOrigenPrevia").html('<a id="urlFacturaOrigenVehiculo" href="'+respuesta["facturaOrigen"]+'" target="_blank"><i class="fa fa-eye text-success" data-tooltip="tooltip" title="Ver PDF" data-placement="top"></i></a>');

			        	}else{

			        		$("#respuestaFacturaOrigenVehiculo").html("<i class='fa fa-times text-danger'></i>");  
        					$("#respuestaFacturaOrigenPrevia").html("<a id='urlFacturaOrigenVehiculo' href=''><i class='fa fa-eye-slash text-danger' data-tooltip='tooltip' title='No disponible' data-placement='top'></i></a>");

			        	}



			        }
			    })

        	// console.log("respuesta", respuesta);
        	$("#loaderVehiculo").fadeOut('slow');

        }


    })



});



function cambiarFacturaVehiculo(){

    let pdrs = document.getElementById('fileFacturaVehiculo').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
  
}


function cambiarPolizaVehiculo(){
	let namePDF = document.getElementById('filePolizaVehiculo').files[0].name;
	document.getElementById('infoPoliza').innerHTML = namePDF;
}


function cambiarTenenciaVehiculo(){
	let namePDF = document.getElementById('fileTenenciaVehiculo').files[0].name;
	document.getElementById('infoTenencia').innerHTML = namePDF;
}


function cambiarVerificacionVehiculo(){
	let namePDF = document.getElementById('fileVerificacionVehiculo').files[0].name;
	document.getElementById('infoVerificacion').innerHTML = namePDF;
}


function cambiarPedimentoVehiculo(){
	let namePDF = document.getElementById('filePedimentoVehiculo').files[0].name;
	document.getElementById('infoPedimento').innerHTML = namePDF;
}

function cambiarTarjetaVehiculo(){
	let namePDF = document.getElementById('fileTarjetaVehiculo').files[0].name;
	document.getElementById('infoTarjeta').innerHTML = namePDF;
}

function cambiarGarantiaVehiculo(){
	let namePDF = document.getElementById('fileGarantiaVehiculo').files[0].name;
	document.getElementById('infoGarantia').innerHTML = namePDF;
}


function cambiarPermisoVehiculo(){
	let namePDF = document.getElementById('filePermisoVehiculo').files[0].name;
	document.getElementById('infoPermiso').innerHTML = namePDF;
}

function cambiarCompraVentaVehiculo(){
	let namePDF = document.getElementById('fileCompraVentaVehiculo').files[0].name;
	document.getElementById('infoCompraVenta').innerHTML = namePDF;
}

function cambiarUltimoTramiteVehiculo(){
	let namePDF = document.getElementById('fileUltimoTramiteVehiculo').files[0].name;
	document.getElementById('infoUltimoTramite').innerHTML = namePDF;
}

function cambiarFacturaOrigenVehiculo(){
	let namePDF = document.getElementById('fileFacturaOrigenVehiculo').files[0].name;
	document.getElementById('infoFacturaOrigen').innerHTML = namePDF;
}





/*==============================================
================================================
=================================================
    
    PROCESAMIENTO DE ALTA DE DOCUMENTACION

================================================
================================================
===============================================*/

function pdfFacturaVehiculo(){

	let url = $("#urlFacturaVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}




function pdfPolizaVehiculo(){

	let url = $("#urlPolizaVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}

function pdfTenenciaVehiculo(){

	let url = $("#urlTenenciaVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}


function pdfVerificacionVehiculo(){

	let url = $("#urlVerificacionVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}


function pdfPedimentoVehiculo(){

	let url = $("#urlPedimentoVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}


function pdfTarjetaVehiculo(){

	let url = $("#urlTarjetaVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}


function pdfGarantiaVehiculo(){

	let url = $("#urlGarantiaVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}



function pdfPermisoVehiculo(){

	let url = $("#urlPermisoVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}


function pdfCompraVentaVehiculo(){

	let url = $("#urlCompraVentaVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}



function pdfUltimoTramiteVehiculo(){

	let url = $("#urlUltimoTramiteVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}



function pdfFacturaOrigenVehiculo(){

	let url = $("#urlFacturaOrigenVehiculo").attr('href');

	if(url != undefined){

		$("#framePDFVehiculo").attr("src",url);

	}else{

		$("#framePDFVehiculo").attr("src","");

		Swal.fire({
			title: "Aun hay archivo disponible!",
			icon: "warning",
			confirmButtonText: "¡Cerrar!"

		});

	}

}



/*==============================================================
        FUNCION PARA AGREGAR FACTURA DE VEHICULO
==============================================================*/

function registrarFacturaVehiculo(){

	let archivoFactura = $("#fileFacturaVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();

	if(archivoFactura == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la factura y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formData = new FormData();
	let facturaDocumento = $("#fileFacturaVehiculo").prop("files")[0];
	// console.log("facturaDocumento", facturaDocumento);

	formData.append("facturaDocumento", facturaDocumento);
	formData.append("folioVehiculo", folioVehiculo);
	formData.append("idVehiculo", idVehiculo);


	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formData,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderFacturaVehiculo").fadeIn('slow');
			$('#loaderFacturaVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderFacturaVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la factura al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	         /* Swal.fire({

	          	    position: "center",
	                text: "Se ha subido la factura al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡ Cerrar !"

	            });*/

			} 


			if(respuesta == "error"){

	          Swal.fire({

	          	    position: "center",
	                html: "<span class='text-uppercase text-danger'>¡ Se ha ocasionado un error !</span>",
	                icon: "error",
	                confirmButtonText: "¡ Cerrar !"

	            });
			}


		}

	});

}


function registrarPolizaVehiculo(){

	let archivoPoliza = $("#filePolizaVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoPoliza == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la póliza y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formPoliza = new FormData();
	let polizaDocumento = $("#filePolizaVehiculo").prop("files")[0];
	// console.log("polizaDocumento", polizaDocumento);

	formPoliza.append("polizaDocumento", polizaDocumento);
	formPoliza.append("folioVehiculo", folioVehiculo);
	formPoliza.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formPoliza,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderPolizaVehiculo").fadeIn('slow');
			$('#loaderPolizaVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			console.log("respuesta", respuesta);

			$("#loaderPolizaVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la poliza al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});


	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido la póliza de seguro al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}


 
function registrarTenenciaVehiculo(){

	let archivoTenencia = $("#fileTenenciaVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoTenencia == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la tenencia y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formTenencia = new FormData();
	let tenenciaDocumento = $("#fileTenenciaVehiculo").prop("files")[0];
	// console.log("tenenciaDocumento", tenenciaDocumento);

	formTenencia.append("tenenciaDocumento", tenenciaDocumento);
	formTenencia.append("folioVehiculo", folioVehiculo);
	formTenencia.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formTenencia,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			$("#loading-max").fadeIn('slow');

			// $("#loaderTenenciaVehiculo").fadeIn('slow');
			// $('#loaderTenenciaVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			$("#loading-max").fadeOut('slow');


			// console.log("respuesta", respuesta);

			// $("#loaderTenenciaVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la tenencia al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	         /* Swal.fire({
	          	    position: "center",
	                text: "Se ha subido la tanencia al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}


 
function registrarVerificacionVehiculo(){

	let archivoVerificacion = $("#fileVerificacionVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoVerificacion == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la verificación y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formVerificacion = new FormData();
	let verificacionDocumento = $("#fileVerificacionVehiculo").prop("files")[0];
	// console.log("verificacionDocumento", tenenciaDocumento);

	formVerificacion.append("verificacionDocumento", verificacionDocumento);
	formVerificacion.append("folioVehiculo", folioVehiculo);
	formVerificacion.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formVerificacion,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderVerificacionVehiculo").fadeIn('slow');
			$('#loaderVerificacionVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderVerificacionVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la verificacion al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido la verificación al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}




function registrarPedimentoVehiculo(){

	let archivoPedimento = $("#filePedimentoVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoPedimento == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF del pedimento y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formPedimento = new FormData();
	let pedimentoDocumento = $("#filePedimentoVehiculo").prop("files")[0];
	// console.log("PedimentoDocumento", tenenciaDocumento);

	formPedimento.append("pedimentoDocumento", pedimentoDocumento);
	formPedimento.append("folioVehiculo", folioVehiculo);
	formPedimento.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formPedimento,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderPedimentoVehiculo").fadeIn('slow');
			$('#loaderPedimentoVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderPedimentoVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido el pedimento al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	         /* Swal.fire({
	          	    position: "center",
	                text: "Se ha subido el pedimento al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}




function registrarTarjetaVehiculo(){

	let archivoTarjeta = $("#fileTarjetaVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoTarjeta == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la tarjeta y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formTarjeta = new FormData();
	let tarjetaDocumento = $("#fileTarjetaVehiculo").prop("files")[0];
	// console.log("TarjetaDocumento", tenenciaDocumento);

	formTarjeta.append("tarjetaDocumento", tarjetaDocumento);
	formTarjeta.append("folioVehiculo", folioVehiculo);
	formTarjeta.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formTarjeta,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderTarjetaVehiculo").fadeIn('slow');
			$('#loaderTarjetaVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderTarjetaVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la tarjeta al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido la tarjeta de circulación al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}





function registrarGarantiaVehiculo(){

	let archivoGarantia = $("#fileGarantiaVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoGarantia == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la póliza de garantía y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formGarantia = new FormData();
	let garantiaDocumento = $("#fileGarantiaVehiculo").prop("files")[0];


	formGarantia.append("garantiaDocumento", garantiaDocumento);
	formGarantia.append("folioVehiculo", folioVehiculo);
	formGarantia.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formGarantia,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderGarantiaVehiculo").fadeIn('slow');
			$('#loaderGarantiaVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderGarantiaVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la garantia al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	         /* Swal.fire({
	          	    position: "center",
	                text: "Se ha subido la póliza de garantía al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}





function registrarPermisoVehiculo(){

	let archivoPermiso = $("#filePermisoVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoPermiso == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF del permiso y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formPermiso = new FormData();
	let permisoDocumento = $("#filePermisoVehiculo").prop("files")[0];


	formPermiso.append("permisoDocumento", permisoDocumento);
	formPermiso.append("folioVehiculo", folioVehiculo);
	formPermiso.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formPermiso,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderPermisoVehiculo").fadeIn('slow');
			$('#loaderPermisoVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderPermisoVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido el permiso al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido el permiso al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}



function registrarCompraVentaVehiculo(){

	let archivoCompraVenta = $("#fileCompraVentaVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoCompraVenta == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF del CompraVenta y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formCompraVenta = new FormData();
	let compraVentaDocumento = $("#fileCompraVentaVehiculo").prop("files")[0];


	formCompraVenta.append("compraVentaDocumento", compraVentaDocumento);
	formCompraVenta.append("folioVehiculo", folioVehiculo);
	formCompraVenta.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formCompraVenta,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderCompraVentaVehiculo").fadeIn('slow');
			$('#loaderCompraVentaVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderCompraVentaVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido el comprobante al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido el permiso al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}







function registrarUltimoTramiteVehiculo(){

	let archivoUltimoTramite = $("#fileUltimoTramiteVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoUltimoTramite == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF del último trámite y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formUltimoTramite = new FormData();
	let ultimoTramiteDocumento = $("#fileUltimoTramiteVehiculo").prop("files")[0];


	formUltimoTramite.append("ultimoTramiteDocumento", ultimoTramiteDocumento);
	formUltimoTramite.append("folioVehiculo", folioVehiculo);
	formUltimoTramite.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formUltimoTramite,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderUltimoTramiteVehiculo").fadeIn('slow');
			$('#loaderUltimoTramiteVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderUltimoTramiteVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido el tramite al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido el último trámite al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}



function registrarFacturaOrigenVehiculo(){

	let archivoFacturaOrigen = $("#fileFacturaOrigenVehiculo").val();
	let idVehiculo = $("#idVehiculo").val();
	let folioVehiculo = $("#folioVehiculo").val();


	if(archivoFacturaOrigen == "" || folioVehiculo == ""){

			Swal.fire({

				position: "center",
				icon: "warning",
				text: "Debes de seleccionar PDF de la factura origen y datos del vehiculo!",
				confirmButtonText: "Cerrar"

			});

		return;
	}


	let formFacturaOrigen = new FormData();
	let facturaOrigenDocumento = $("#fileFacturaOrigenVehiculo").prop("files")[0];


	formFacturaOrigen.append("facturaOrigenDocumento", facturaOrigenDocumento);
	formFacturaOrigen.append("folioVehiculo", folioVehiculo);
	formFacturaOrigen.append("idVehiculo", idVehiculo);

	$.ajax({
		url:'ajax/documentacion-vehiculos.ajax.php',
		type:'POST',
		cache:false,
		data:formFacturaOrigen,
		contentType:false,
		processData:false,
		dataType: "json",
		beforeSend:function(){

			// console.log("respuesta a vefocre");

			$("#loaderFacturaOrigenVehiculo").fadeIn('slow');
			$('#loaderFacturaOrigenVehiculo').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

		},
		success:function(respuesta){

			// console.log("respuesta", respuesta);

			$("#loaderFacturaOrigenVehiculo").fadeOut('slow');

			if(respuesta == "ok"){

				toastMixin.fire({
					animation: true,
					title: "Se ha subido la factura origen al directorio: "+folioVehiculo,
					icon: "success"
				}).then(() => {

					window.location = 'alta-documentos';

				});

	          /*Swal.fire({
	          	    position: "center",
	                text: "Se ha subido el último trámite al directorio de: "+folioVehiculo,
	                icon: "success",
	                confirmButtonText: "¡Cerrar!"

	            });*/
			}
		}

	});
}


/*======================================================
========================================================
========================================================

     SECCION DE ELIMINACION DOCUMENTACION PDF

========================================================
========================================================
//====================================================*/

function eliminarFacturaVehiculo(){


	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlFacturaVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "facturaDocumento";

		

	 if(folio != "" && archivo != ""){

			Swal.fire({
				title:'¿Estas seguro de borrar el documento',
				text: 'Si no lo esta puede cancelar la accion!',
				icon:'warning',
				showCancelButton:true,
				confirmButtonColor:'#3085d6',
				cancelButtonColor:'#d33',
				cancelButtonText: 'Cancelar',
				allowOutsideClick: false,
				confirmButtonText: 'Si, ¡ Borrar Factura !'

			}).then((result)=>{

				if(result.value){

					 window.location = "index.php?ruta=alta-documentos&facturaVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
					                                                  
				}

			})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }


}


function eliminarPolizaVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlPolizaVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "polizaDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si, ¡ Borrar Poliza !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&polizaVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}



function eliminarTenenciaVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlTenenciaVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "tenenciaDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ Borrar Tenencia!'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&tenenciaVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}


function eliminarVerificacionVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlVerificacionVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "verificacionDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ Borrar Verificación !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&verificacionVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}




function eliminarPedimentoVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlPedimentoVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "pedimentoDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ Borrar Pedimento !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&pedVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}



function eliminarTarjetaVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlTarjetaVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "tarjetaDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ Borrar Tarjeta Circulación!'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&tcVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}





function eliminarGarantiaVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlGarantiaVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "garantiaDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡borrar póliza de garantía!'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&pgVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}



function eliminarPermisoVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlPermisoVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "permisoDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ borrar el permiso !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&pVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}





function eliminarCompraVentaVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlCompraVentaVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "compraVentaDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ borrar el compra-venta !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&cvVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}




function eliminarUltimoTramiteVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlUltimoTramiteVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "ultimoTramiteDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ borrar el último trámite !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&utVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}


function eliminarFacturaOrigenVehiculo(){

	let folio = $("#folioVehiculo").val();
	let archivo = $("#urlFacturaOrigenVehiculo").attr("href");
	let idVehiculo = $("#idVehiculo").val();
	let tipoDocumento = "facturaOrigenDocumento";

	 if(folio != "" && archivo != ""){

		Swal.fire({
			title:'¿Estas seguro de borrar el documento',
			text: 'Si no lo esta puede cancelar la accion!',
			icon:'warning',
			showCancelButton:true,
			confirmButtonColor:'#3085d6',
			cancelButtonColor:'#d33',
			cancelButtonText: 'Cancelar',
			allowOutsideClick: false,
			confirmButtonText: 'Si, ¡ borrar la factura origen !'

		}).then((result)=>{

			if(result.value){

				 window.location = "index.php?ruta=alta-documentos&foVe="+tipoDocumento+"&idVehiculo="+idVehiculo+"&folio="+folio+"&archivo="+archivo;
				                                                  
			}

		})

	 }else{

	 	Swal.fire({
	 		title: "Debes de elegir al vehiculo y para tomar el archivo a eliminar",
	 		icon: "warning",
	 		confirmButtonText: "¡Cerrar!"

	 	});

	 }

}



/*============================================================
==============================================================
==============================================================
   
   VALIDACIONES DE LOS INPUT

==============================================================
==============================================================
===========================================================*/


$(".fileFacturaVehiculo").change(function(){  

	let factura  = this.files[0];

	if(factura["type"] != "application/pdf"){

		$(".fileFacturaVehiculo").val("");
		$("#info").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(factura["size"] > 2000000){
		
		$(".fileFacturaVehiculo").val("");
		$("#info").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});




$(".filePolizaVehiculo").change(function(){  

	let poliza  = this.files[0];

	if(poliza["type"] != "application/pdf"){

		$(".filePolizaVehiculo").val("");
		$("#infoPoliza").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(poliza["size"] > 2000000){

		$(".filePolizaVehiculo").val("");
		$("#infoPoliza").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});



$(".fileTenenciaVehiculo").change(function(){  

	let tenencia  = this.files[0];

	if(tenencia["type"] != "application/pdf"){

		$(".fileTenenciaVehiculo").val("");
		$("#infoTenencia").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(tenencia["size"] > 2000000){

		$(".fileTenenciaVehiculo").val("");
		$("#infoTenencia").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});


$(".fileVerificacionVehiculo").change(function(){  

	let verificacion  = this.files[0];

	if(verificacion["type"] != "application/pdf"){

		$(".fileVerificacionVehiculo").val("");
		$("#infoVerificacion").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(verificacion["size"] > 2000000){

		$(".fileVerificacionVehiculo").val("");
		$("#infoVerificacion").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});



$(".filePedimentoVehiculo").change(function(){  

	let pedimento  = this.files[0];

	if(pedimento["type"] != "application/pdf"){

		$(".filePedimentoVehiculo").val("");
		$("#infoPedimento").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(pedimento["size"] > 2000000){

		$(".filePedimentoVehiculo").val("");
		$("#infoPedimento").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});



$(".fileTarjetaVehiculo").change(function(){  

	let tarjeta  = this.files[0];

	if(tarjeta["type"] != "application/pdf"){

		$(".fileTarjetaVehiculo").val("");
		$("#infoTarjeta").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(tarjeta["size"] > 2000000){

		$(".fileTarjetaVehiculo").val("");
		$("#infoTarjeta").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});



$(".fileGarantiaVehiculo").change(function(){  

	let garantia  = this.files[0];

	if(garantia["type"] != "application/pdf"){

		$(".fileGarantiaVehiculo").val("");
		$("#infoGarantia").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(garantia["size"] > 2000000){

		$(".fileGarantiaVehiculo").val("");
		$("#infoGarantia").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});




$(".filePermisoVehiculo").change(function(){  

	let permiso  = this.files[0];

	if(permiso["type"] != "application/pdf"){

		$(".filePermisoVehiculo").val("");
		$("#infoPermiso").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(permiso["size"] > 2000000){

		$(".filePermisoVehiculo").val("");
		$("#infoPermiso").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});



$(".fileCompraVentaVehiculo").change(function(){  

	let compraVenta  = this.files[0];

	if(compraVenta["type"] != "application/pdf"){

		$(".fileCompraVentaVehiculo").val("");
		$("#infoCompraVenta").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(compraVenta["size"] > 2000000){

		$(".fileCompraVentaVehiculo").val("");
		$("#infoCompraVenta").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});




$(".fileUltimoTramiteVehiculo").change(function(){  

	let ultimoTramite  = this.files[0];

	if(ultimoTramite["type"] != "application/pdf"){

		$(".fileUltimoTramiteVehiculo").val("");
		$("#infoUltimoTramite").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(ultimoTramite["size"] > 2000000){

		$(".fileUltimoTramiteVehiculo").val("");
		$("#infoUltimoTramite").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});



$(".fileFacturaOrigenVehiculo").change(function(){  

	let facturaOrigen  = this.files[0];

	if(facturaOrigen["type"] != "application/pdf"){

		$(".fileFacturaOrigenVehiculo").val("");
		$("#infoFacturaOrigen").html('');
	
		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe estar en formato PDF",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}else if(facturaOrigen["size"] > 2000000){

		$(".fileFacturaOrigenVehiculo").val("");
		$("#infoFacturaOrigen").html('');

		Swal.fire({
			title:"Error al subir el archivo",
			text:"¡El archivo debe superar los 2 MB",
			icon:"error",
			confirmButtonText: "¡Cerrar!"
		});

	}

});





/*==============================================================
   LLAMADOS DE DATOS EN EVENTO CHANGE EN DATOS DEL VEHICULO 
==============================================================*/
$("#identidadVehiculoEmailId").change(function(){

	let idVehiculo = $(this).val();
	// console.log("idVehiculo", idVehiculo);

	let datos = new FormData(); 
	datos.append('vehiculo_id', idVehiculo);


	$.ajax({

		url:"ajax/documentacion-vehiculos.ajax.php",
        method:"POST",
        data:datos,
        cache: false, 
        contentType: false,
        processData: false,
        dataType: "json",
        beforeSend:function(){

        	$("#elementosEnviadosIdItem").val("");
			$("#loaderVehiculoEmail").fadeIn('slow');
			$('#loaderVehiculoEmail').html('<img src="vistas/img/plantilla/ajax-loader.gif">');  

			$("#rdoFactura").prop("checked", false);
			$("#rdoPoliza").prop("checked", false);
			$("#rdoTenencia").prop("checked", false);
			$("#rdoVerificacion").prop("checked", false);
			$("#rdoPedimento").prop("checked", false);
			$("#rdoTarjeta").prop("checked", false);
			$("#rdoGarantia").prop("checked", false);
			$("#rdoPermiso").prop("checked", false);
			$("#rdoCompraVenta").prop("checked", false);
			$("#rdoUltimoTramite").prop("checked", false);
			$("#rdoFacturaOrigen").prop("checked", false);


			// $("#datosVehiculoId").val(respuesta[""]);


			$("#opt1").removeClass('nuevoItemRuta');
			$("#opt2").removeClass('nuevoItemRuta');
			$("#opt3").removeClass('nuevoItemRuta');
			$("#opt4").removeClass('nuevoItemRuta');
			$("#opt5").removeClass('nuevoItemRuta');
			$("#opt6").removeClass('nuevoItemRuta');
			$("#opt7").removeClass('nuevoItemRuta');
			$("#opt8").removeClass('nuevoItemRuta');
			$("#opt9").removeClass('nuevoItemRuta');
			$("#opt10").removeClass('nuevoItemRuta');
			$("#opt11").removeClass('nuevoItemRuta');

		},
        success:function(respuesta){
        	// console.log("respuesta", respuesta);

        	$("#loaderVehiculoEmail").fadeOut('slow');

        	if(respuesta["checkFactura"] == "1"){

	    		// $("#rdoFactura").prop("checked", true);
	    		$("#rdoFactura").prop("disabled", false);
	    		$("#rdoFacturaName").css("color","#495057");  //css("background-color", "yellow");
	    		$("#opt1").val(respuesta["factura"]);

    		}else{

    			$("#rdoFactura").prop("disabled", true);
    			$("#rdoFacturaName").css("color","#e9ecef");
    			$("#opt1").val("");
    		}

    		if(respuesta["checkPoliza"] == "1"){

    			$("#rdoPoliza").prop("disabled", false);
	    		$("#rdoPolizaName").css("color","#495057");
	    		$("#opt2").val(respuesta["poliza"]);

    		}else{

    			$("#rdoPoliza").prop("disabled", true);
    			$("#rdoPolizaName").css("color","#e9ecef");
    			$("#opt2").val("");
    		}


    		if(respuesta["checkTenencia"] == "1"){

    			$("#rdoTenencia").prop("disabled", false);
	    		$("#rdoTenenciaName").css("color","#495057");
	    		$("#opt3").val(respuesta["tenencia"]);

    		}else{

    			$("#rdoTenencia").prop("disabled", true);
    			$("#rdoTenenciaName").css("color","#e9ecef");
    			$("#opt3").val("");
    		}


    		if(respuesta["checkVerificacion"] == "1"){

    			$("#rdoVerificacion").prop("disabled", false);
	    		$("#rdoVerificacionName").css("color","#495057");
	    		$("#opt4").val(respuesta["verificacion"]);

    		}else{

    			$("#rdoVerificacion").prop("disabled", true);
    			$("#rdoVerificacionName").css("color","#e9ecef");
    			$("#opt4").val("");
    		}


    		if(respuesta["checkPedimento"] == "1"){

    			$("#rdoPedimento").prop("disabled", false);
	    		$("#rdoPedimentoName").css("color","#495057");
	    		$("#opt5").val(respuesta["pedimento"]);

    		}else{

    			$("#rdoPedimento").prop("disabled", true);
    			$("#rdoPedimentoName").css("color","#e9ecef");
    			$("#opt5").val("");
    		}


    		if(respuesta["checkTarjeta"] == "1"){

    			$("#rdoTarjeta").prop("disabled", false);
	    		$("#rdoTarjetaName").css("color","#495057");
	    		$("#opt6").val(respuesta["tarjeta"]);

    		}else{

    			$("#rdoTarjeta").prop("disabled", true);
    			$("#rdoTarjetaName").css("color","#e9ecef");
    			$("#opt6").val("");

    		}

    		if(respuesta["checkGarantia"] == "1"){

    			$("#rdoGarantia").prop("disabled", false);
	    		$("#rdoGarantiaName").css("color","#495057");
	    		$("#opt7").val(respuesta["garantia"]);

    		}else{

    			$("#rdoGarantia").prop("disabled", true);
    			$("#rdoGarantiaName").css("color","#e9ecef");
    			$("#opt7").val("");

    		}

    		if(respuesta["checkPermiso"] == "1"){

    			$("#rdoPermiso").prop("disabled", false);
	    		$("#rdoPermisoName").css("color","#495057");
	    		$("#opt8").val(respuesta["permiso"]);

    		}else{

    			$("#rdoPermiso").prop("disabled", true);
    			$("#rdoPermisoName").css("color","#e9ecef");
    			$("#opt8").val("");
    		}


    		if(respuesta["checkCompraVenta"] == "1"){

    			$("#rdoCompraVenta").prop("disabled", false);
	    		$("#rdoCompraVentaName").css("color","#495057");
	    		$("#opt9").val(respuesta["compraVenta"]);

    		}else{

    			$("#rdoCompraVenta").prop("disabled", true);
    			$("#rdoCompraVentaName").css("color","#e9ecef");
    			$("#opt9").val("");


    		}


    		if(respuesta["checkUltimoTramite"] == "1"){

    			$("#rdoUltimoTramite").prop("disabled", false);
	    		$("#rdoUltimoTramiteName").css("color","#495057");
	    		$("#opt10").val(respuesta["ultimoTramite"]);

    		}else{

    			$("#rdoUltimoTramite").prop("disabled", true);
    			$("#rdoUltimoTramiteName").css("color","#e9ecef");
    			$("#opt10").val("");
    		}


    		if(respuesta["checkFacturaOrigen"] == "1"){

    			$("#rdoFacturaOrigen").prop("disabled", false);
	    		$("#rdoFacturaOrigenName").css("color","#495057");
	    		$("#opt11").val(respuesta["facturaOrigen"]);

    		}else{

    			$("#rdoFacturaOrigen").prop("disabled", true);
    			$("#rdoFacturaOrigenName").css("color","#e9ecef");
    			$("#opt11").val("");

    		}

    		// DATOS DEL VEHICULO
    		let datos = new FormData(); 
    		datos.append('idVehiculo', idVehiculo);


    		$.ajax({

    			url:"ajax/vehiculos.ajax.php",
    			method:"POST",
    			data:datos,
    			cache: false, 
    			contentType: false,
    			processData: false,
    			dataType: "json",
    			beforeSend:function(){

    				$("#loading-max").fadeIn('slow');

    			},
    			success:function(respuesta){
    				console.log("respuesta", respuesta);

    				$("#datosVehiculoId").val("Modelo: "+respuesta["modelo"]+", Serie: "+ respuesta["serie"]);

    				$("#loading-max").fadeOut('slow');

    			}

    		}) //TERMINA DATOS VEHICULO



        }

    })

})



$(".tablaSolicitudesVehiculos tbody").on("click",".btnEnviarEmail", function(){

	let idSolicitante = $(this).attr("idEmail");
	// console.log("idSolicitante", idSolicitante);

	let datos = new FormData(); 
	datos.append('idUsuario', idSolicitante);


	$.ajax({
		url:"ajax/usuarios.ajax.php",
        method:"POST",
        data:datos,
        cache: false, 
        contentType: false,
        processData: false,
        dataType: "json",
        beforeSend:function(){

        	$("#loading-max").fadeIn('slow');

		},
        success:function(respuesta){
        	// console.log("respuesta", respuesta);

        	$("#emailEnvio").html(respuesta["email"]);
        	$("#emailEnvia").val(respuesta["email"]);


        	$("#loading-max").fadeOut('slow');

        }

    })


})



function listarItemsEmail(){

	let listaItems = [];
	// let elementos = $(".nuevoElemetoItem");
	let rutas = $(".nuevoItemRuta")

	for(let i=0;i<rutas.length;i++){

		listaItems.push({"rutaItem": $(rutas[i]).val() });
		


	}
	console.log("listaItems", listaItems);

	$("#elementosEnviadosIdItem").val(JSON.stringify(listaItems));


}


$("#rdoFactura").click(function(){


	let factura = $("#rdoFactura").val();
	// console.log("factura", factura);

	if( factura == "on"){

		$("#opt1").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})



$("#rdoPoliza").click(function(){


	let poliza = $("#rdoPoliza").val();
	// console.log("poliza", poliza);

	if( poliza == "on"){

		$("#opt2").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})


$("#rdoTenencia").click(function(){


	let tenencia = $("#rdoTenencia").val();
	// console.log("tenencia", tenencia);

	if( tenencia == "on"){

		$("#opt3").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})


$("#rdoVerificacion").click(function(){


	let verificacion = $("#rdoVerificacion").val();
	// console.log("verificacion", verificacion);

	if( verificacion == "on"){

		$("#opt4").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})



$("#rdoPedimento").click(function(){


	let pedimento = $("#rdoPedimento").val();
	// console.log("pedimento", pedimento);

	if( pedimento == "on"){

		$("#opt5").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})


$("#rdoTarjeta").click(function(){


	let tarjeta = $("#rdoTarjeta").val();
	// console.log("tarjeta", tarjeta);

	if( tarjeta == "on"){

		$("#opt6").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})

$("#rdoGarantia").click(function(){


	let garantia = $("#rdoGarantia").val();
	// console.log("garantia", garantia);

	if( garantia == "on"){

		$("#opt7").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})

$("#rdoPermiso").click(function(){


	let permiso = $("#rdoPermiso").val();
	// console.log("permiso", permiso);

	if( permiso == "on"){

		$("#opt8").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})


$("#rdoCompraVenta").click(function(){


	let compraVenta = $("#rdoCompraVenta").val();
	// console.log("compraVenta", compraVenta);

	if( compraVenta == "on"){

		$("#opt9").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})


$("#rdoUltimoTramite").click(function(){


	let ultimoTramite = $("#rdoUltimoTramite").val();
	// console.log("ultimoTramite", ultimoTramite);

	if( ultimoTramite == "on"){

		$("#opt10").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})


$("#rdoFacturaOrigen").click(function(){


	let facturaOrigen = $("#rdoFacturaOrigen").val();
	// console.log("facturaOrigen", facturaOrigen);

	if( facturaOrigen == "on"){

		$("#opt11").addClass('nuevoItemRuta');
	}

	listarItemsEmail();

})