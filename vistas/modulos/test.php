<div class="content-wrapper">

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1>Administración de Pruebas</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Alta Pruebas

						</li>

					</ol>

				</div>

			</div>

		</div>

	</section>


	<section class="content">

		<div class="container-fluid">

			<div class="row">

				<div class="col-12">

					<div class="card">

						<div class="card-header bg-info">

							<h3 class="card-title text-center">

								Llegan el siguiente formulario correctamente.
								
							</h3>
						
						</div>

						 <div class="card-body">

						 	<div class="row">

						 		<div class="col-12">


			                <table class="table table-bordered table-hover tablas tablaIncidencias">

			                  <thead>

				                  <tr>
				                   <th style="width:10px" class="text-center">#</th>
    						           <th class="text-center">Fecha</th>
    						           <th class="text-center">Hora</th>
    						           <th class="text-center">Emisor</th>
    						           <th class="text-center">Ubicación</th>
    						           <th class="text-center">Observaciones</th>
    						           <th class="text-center">Fecha Alta</th>
    						           <th class="text-center">Fecha Actual</th>
    						           <th class="text-center">Fecha Diferencias</th>
    						           <th>Campo</th>
    						           <th class="text-center">Multimedia / Imagen</th>
						        
				                  </tr>
				                  
			                  </thead>
			                  
			                  <tbody>

			                  	<?php 

			                  		$itemIncidencias = null;
			                  		$valorIncidencias = null;

			                  		$respuestaIncidencia = ControladorIncidencias::ctrMostrarIncidencias($itemIncidencias, $valorIncidencias);

			                  		foreach ($respuestaIncidencia as $key => $value) {
			                  			
			                  			echo '<tr>

					                  			<td class="text-center">'.($key+1).'</td>

					                  			<td class="text-center">'.$value["fecha"].'</td>

					                  			<td class="text-center">'.$value["hora"].'</td>';

					                  			$itemEmisor = "id";
					                  			$valorEmisor = $value["emisor_id"];

					                  			$respuestaEmisor = ControladorUsuarios::ctrMostrarUsuarios($itemEmisor, $valorEmisor);


					                  	echo	'<td class="text-center">'.$respuestaEmisor["nombre"].'</td>

					                  			<td class="text-center">'.$value["camara"].'</td>

					                  			<td class="text-center">'.$value["observaciones"].'</td>

					                  			<td class="text-center">'.$value["created_at"].'</td>

					                  			<td class="text-center">'.date("Y-m-d H:i:s").'</td>';

					                  			$datetime1 = new DateTime($value["created_at"]);
					                  			$datetime2 = new DateTime(date("Y-m-d H:i:s"));
					                  			$interval = $datetime1->diff($datetime2);
					                  			$dias = $interval->days;

					                  	echo	'<td class="text-center">'.$dias.'</td>';

					                  			if($dias >= 40 && $value["caracterIncidencia"] == "0"){

					                  				//AQUI ELIMINAMOS REGISTRO INCIDENCIA IMPORTANTES A 40 DIAS
					                  			
					                  				ControladorIncidencias::ctrBorrarIncidencia($value["idIncidencia"]);


					                  			echo '<td class="text-center">Importantes a eliminar a 40 dias </td>';

					                  			}else if($dias >= 100  && $value["caracterIncidencia"] == "1"){


					                  				//AQUI ELIMINAMOS REGISTRO INCIDENCIA IMPORTANTES A 40 DIAS
					                  				
					                  				ControladorIncidencias::ctrBorrarIncidencia($value["idIncidencia"]);


					                  			echo '<td class="text-center">Urgente a eliminar a 100 dias</td>';


					                  			}else{

					                  			 echo '<td class="text-center">Sin actividad</td>';

					                  			}

					                  

					                  			if($value["multimedia"] != null){

			                                      if($value["caracterIncidencia"] == "0"){

			                                          echo '<td class="text-center">Ver - <i class="fa fa-play bg-success iconVideo p-3 btnMultimedia" idMultimedia = "'.$value["idIncidencia"].'" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modalPrevia"></i></td>';



			                                      }else if($value["caracterIncidencia"] == "1"){

			                                          echo '<td class="text-center">Ver - <i class="fa fa-play bg-danger iconVideo p-3 btnMultimedia" idMultimedia = "'.$value["idIncidencia"].'" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modalPrevia"></i></td>';


			                                      }

								                  			

					                  			}else{

					                  				echo '<td class="text-center">--</td>';

					                  			}

					                  		
			                  		echo 	'</tr>';



			                  		}


			                  	 ?>
	

			                  </tbody>
			    
			                </table>
						 			
						
						 		</div>
						
						 	</div>

						 </div>

					</div>


				</div>


			</div>

		</div>

	</section>

</div>