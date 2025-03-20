<?php 

if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2"){

?>
<div class="content-wrapper">

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h4>Administración de Empresas</h4>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Empresas

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

						<div class="card-header">

							<h5 class="card-title text-center badge badge-success text-uppercase">

								eventos del sistema
							</h5>
						
						</div>

						 <div class="card-body">   

			                <table  id="tablaLogs" class="table display table-bordered table-hover table-resposive table-sm" width="100%">

			              <thead>

				                  <tr>
				                   <th style="width:10px" class="text-center">#</th>
						           <th>actividad</th>
						           <th class="text-center">tipo</th>
						           <th class="text-center">usuario ejecutado</th>
						           <th class="text-center">proveedor de conexion</th>
						           <th class="text-center">ip publica</th>
						           <th class="text-center">fecha \ hora</th>
						           <!-- <th class="text-center">Hora</th>  -->
				                  </tr>
				                  
			                  </thead>
			                
			                  <!-- <tbody> -->
			                

						    <?php

						       /* $item = null;
						        $valor = null;
						        $orden = "DESC";

						        $logs = ControladorLogs::ctrMostrarLogs($item, $valor, $orden);

						       foreach ($logs as $key => $value){
						         
						          echo ' <tr class="bordes">

						          			<td>'.($key+1).'</td>
						          			<td>'.$value["actividad"].'</td>';

						          			if($value["tipo"] == "Alta"){

						          				echo '<td class="text-center"><span class="badge badge-success">Alta de registro</span></td>';

						          			}else if($value["tipo"] == "Edición"){

						          				echo '<td class="text-center"><span class="badge badge-warning">Edición de registro</span></td>';

						          			}else if($value["tipo"]== "Eliminación"){

						          				echo '<td class="text-center"><span class="badge badge-danger">Eliminación de registro</span></td>';

						          			}else if($value["tipo"]== "Pago"){

						          				echo '<td class="text-center"><span class="badge badge-primary">Pago de Orden</span></td>';


						          			}else if($value["tipo"]== "Ingreso"){

						          				echo '<td class="text-center"><span class="badge badge-info">Ingreso al sistema</span></td>';

						          			}else if($value["tipo"]== "Cancelado"){

						          				echo '<td class="text-center"><span class="badge badge-secondary">Cancelación</span></td>';

						          			}else{

						          				echo '<td class="text-center"><span class="badge badge-dark">Sin Indentificar</span></td>';

						          			}
						          			

						          			$itemUsuario = "idResponsable";
						          			$valorUsuario = $value["usuario_id"];

						          			$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario,$valorUsuario);


						          echo	   '<td class="text-center">'.$respuestaUsuario["responsable"].'</td>
						          			<td class="text-center">'.$value["private_id"].'</td>
						          			<td class="text-center">'.$value["public_id"].'</td>
						          			<td class="text-center">'.ControladorPlantilla::fechaLarga($value["eject"]).'</td>
						          			<td class="text-center">'.substr($value["eject"], 10, 9).'</td>
						    
						                
						                </tr>'; 
						        }*/


						        ?>

			                  <!-- </tbody> -->
			    
			                </table>
			              </div>
			            
			            </div>

					</div>
				</div>
				
			</div>
			
	
	</section>

</div>


<?php }else{


	 echo '<script>
  			
  			window.location = "inicio";

       </script>';


} 

?>