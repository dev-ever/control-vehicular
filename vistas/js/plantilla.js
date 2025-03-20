






const rutaOcultaBack = document.getElementById('rutaOculta').value;
 // console.log("rutaOculta", rutaOcultaBack);

let request_uri = location.pathname;
// console.log("request_uri", request_uri);
let dir = request_uri.split('/');
// console.log("dir", dir[2]);
let URL_REQUEST_URI = dir[1];

console.log("URL_REQUEST_URI:", URL_REQUEST_URI);


 $('.modal-dialog').draggable({

     handle: ".modal-header"

  });




$(function () {

  $('[data-tooltip="tooltip"]').tooltip();
  
})


 

   $(document).ready(function() {

      $('.nuevoEnvio').selectpicker();
      $('.nuevoEnvio').addClass("form-control");



	      $('#nuevoEnvioId').on('change', function(evt) {

	        if ($(this).val() && $(this).val().length > 5) {

	            $(this).val($(this).val().slice(0, 5));

	            // alert('Solo puedes seleccionar hasta 5 opciones.');
	            Swal.fire({
	            	position:"center",
	            	title: "¡ Máximo 5 opciones !",
	            	text: "Solo se toman las 5 primeras seleccionadas.",
	            	icon: "warning",
	            	confirmButtonText:"¡Cerrar!"
	            });


	            $(this).selectpicker('refresh');

	        }
	    });



    });


/*=============================================
Data Table
=============================================*/

$(".tablas").DataTable({

	"pageLength": 15,
    "lengthMenu": [ 15, 25, 50, 75, 100 ],

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar Registros:",
        "searchPlaceholder": "Registro a buscar",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"

		},

		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}, 

   "responsive": true, "lengthChange": true, "autoWidth": false,

})


$(".tablaVehicular").DataTable({

    "drawCallback": function( settings ) {
         $('ul.pagination').addClass("pagination-sm");
    },

     "pageLength": 5,
      language:{
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar",
        "searchPlaceholder": "Ingresa el registro a buscar",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
      },


      
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf"]
    });





$(function() {
 
  $('[data-tooltip="tooltip"]').tooltip();
  
})




$('#example').DataTable({

	"pageLength": 10,
    "lengthMenu": [ 10, 25, 50, 75, 100 ],


	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar Registros:",
        "searchPlaceholder": "Registro a buscar",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"

		},

		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}, 

   "responsive": true, "lengthChange": true, "autoWidth": false,

	"footerCallback": function ( row, data, start, end, display ) {

		// total = this.api();
		var api = this.api();
		

				var totalGeneral = api
			

                .column(9)//numero de columna a sumar

                //.column(1, {page: 'current'})//para sumar solo la pagina actual
                .data()

                .reduce(function (a, b) {

                	return parseInt(a) + parseInt(b);

                }, 0 );



                var totalPagina = api

                .column(9, { page: 'current' })

                .data()

                .reduce(function (a, b) {

                	return parseInt(a) + parseInt(b);

                }, 0);

                $(api.column(9).footer()).html('<span class="text-primary text-uppercase">' + totalPagina + ' </span> de <span class="text-info">' + totalGeneral+'</span>');
                

            }
        });





function generarRandom(num) {

    const characters = "abcdefghijklmnopqrstuvwxyz0123456789-";
    const charactersLength = characters.length;
    let result = "";
    let ch;

    while (result.length < num){

        ch = characters.charAt(Math.floor(Math.random() * charactersLength));

        if (!result.includes(ch)){

            result += ch;
        }

    }

  return result;

}



 $("#tablaNotificaciones").DataTable({

    info: false,
    "searching": false,
   // "paging": false,
   "pageLength": 10,
   "lengthMenu": [ 2, 4, 10, 15],

   "language": {

    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar Registros:",
    "searchPlaceholder": "Ingresa el registro a buscar",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
    "sFirst":    "Primero",
    "sLast":     "Último",
    "sNext":     "Siguiente",
    "sPrevious": "Anterior"

    },

    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }

  }, 

   "responsive": true, 
   "lengthChange": true, 
   "autoWidth": false,

});




$(".tablaSolicitudesVehiculos").DataTable({

    "pageLength": 15,

    "lengthMenu": [15, 25, 50, 75, 100],

    "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar Registros:",
        "searchPlaceholder": "Registro a buscar",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    },

    "responsive": true,
    "lengthChange": true,
    "autoWidth": false,
    // Configuración de botones
     "dom": '<"top"lfB>rt<"bottom"ip>',

    "buttons": [
        {
            extend: 'excelHtml5',
            text: '<i class="fa fa-file-excel"></i> Exportar a Excel',
            titleAttr: 'Exportar a Excel',
            className: 'm-2 btn btn-info text-uppercase text-bold text-white border-1'
        },
        {
            extend: 'print',
            text: '<i class="fa fa-print"></i> Imprimir',
            titleAttr: 'Imprimir',
            className: 'm-2 btn btn-info text-uppercase text-bold text-white border-1'
        }
    ]
});







var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

// document.querySelector(".first").addEventListener('click', function(){
//   Swal.fire({
//     toast: true,
//     icon: 'success',
//     title: 'Posted successfully',
//     animation: false,
//     position: 'bottom',
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     didOpen: (toast) => {
//       toast.addEventListener('mouseenter', Swal.stopTimer)
//       toast.addEventListener('mouseleave', Swal.resumeTimer)
//     }
//   })
// });

// document.querySelector(".second").addEventListener('click', function(){
//   toastMixin.fire({
//     animation: true,
//     title: 'Signed in Successfully'
//   });
// });

// document.querySelector(".third").addEventListener('click', function(){
//   toastMixin.fire({
//     title: 'Wrong Password',
//     icon: 'error'
//   });
// });



$("#tablaLogs").DataTable({

    "pageLength": 15,
    "lengthMenu": [ 15, 25, 50, 75, 100 ],
    "processing": true,
    "serverSide": true,

    ajax:{
        url: "../../ajax/serverSideLogs.ajax.php",
        type: "POST"
        // dataSrc: "data"
    },

    columns:[
        
        // { data: "idLog" },
        { data: "autoincrement", title:"#" },
        { data: "actividad" },
        { data: "tipo" },
        { data: "usuario_id" },
        { data: "private_id" },
        { data: "public_id" },
        { data: "eject"}
    ],

    language: {
        
        url: "../../ajax/es-ES.json" // Traducción al español
    },

    "responsive": true, "lengthChange": true, "autoWidth": false,

     "drawCallback": function( settings ) {

         $('ul.pagination').addClass("pagination-sm");
    },

})



$("#tablaVehiculosGral").DataTable({

    "pageLength": 15,
    "lengthMenu": [ 15, 25, 50, 75, 100 ],
    "processing": true,
    "serverSide": true,

    ajax:{
        url: "../../ajax/serverSideVehiculos.ajax.php",
        type: "POST"
        // dataSrc: "data"
    },

    columns:[
        
        // { data: "idLog" },
        { data: "autoincrement", title:"#" },
        { 
            data:"imagen",
            title: "IMAGEN",
            render: function(data, type, row){

                if(!data){   

                    return `<button class="btn btn-xs btnAgregarFoto" idVehiculo="${row.idVehiculo}" data-bs-toggle="modal" data-bs-target="#modalActualizarVehiculo" data-tooltip="tooltip" data-placement="top" title="Agregar Foto"><i class="fa fa-paperclip"></i></button>`;

                }else{

                    return `<button class="btn btn-xs btnAgregarFoto" idVehiculo="${row.idVehiculo}" data-bs-toggle="modal" data-bs-target="#modalActualizarVehiculo" data-tooltip="tooltip" data-placement="top" title="Cambiar Foto" style="border-color:transparent;"><img id="vehiculo-zoom" src="${data}" class="img-fluid img-thumbnail zoomImg" width="40%"></button>`;


                }

                
            }
        },

        { data: "folio" },
        { data: "eco" },
        { data: "propietario_id" },
        { data: "ubicacion" },
        { data: "modelo" },
        { data: "serie" },
        { data: "placas" },
        { data: "nombreTarjeta" },
        { data: "motor" },
        { data: "clase_id" },
        { data: "marca_id" },
        { data: "subMarca_id" },
        { data: "transporte_id" },
        { data: "combustible_id" },
        { data: "responsable_id" },
        { data: "unidad_id" }, 
        { data: "usuario_asignado_id" },
        { 

            data: "idVehiculo", 
            title:"ACCIONES",
            orderable: false,
            searchable: false,
            render: function(data, type, row){

                return `<button class="btn btn-warning btn-xs btnEditarVehiculo" 
                         idVehiculo="${data}" 
                         data-bs-toggle="modal"
                         data-bs-target="#modalEditarVehiculo" 
                         data-tooltip="tooltip" 
                         data-original-title="Editar">
                         <i class="fa fa-pen"></i>
                         </button>

                         <button class="btn btn-danger btn-xs btnEliminarVehiculo" 
                         idVehiculo="${data}"  
                         data-tooltip="tooltip" 
                         data-original-title="Eliminar">
                         <i class="fa fa-trash"></i>
                         </button>`;
            }


        }
    ],

    language: {
        
        url: "../../ajax/es-ES.json" // Traducción al español
    },

    "responsive": true, "lengthChange": true, "autoWidth": false,

     "drawCallback": function( settings ) {

         $('ul.pagination').addClass("pagination-sm");
    },

})
