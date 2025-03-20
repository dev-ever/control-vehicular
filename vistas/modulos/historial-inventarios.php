<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header"> 

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1>Relación de Inventarios Vehiculares</h1> 

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Inventarios Vehiculares

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

							<h3 class="card-title text-center">

								<button class="btn btn-dark btn-md p-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarSolictudVehiculoInventario"><i class="fa fa-pen"></i> Agregar Solicitud de Inventario</button> 

							</h3>

						</div>

						<div class="card-body">

							<table id="tablaSolicitudesVehiculos" class="table table-bordered table-hover tablaSolicitudesVehiculos" style="width: 100%;">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">Unidad</th>
                    <th class="text-center">Quien ejecuto el inventario</th>
                    <th class="text-center">Fecha de ejcución</th>
                    <th class="text-center">Descripción</th>
                  
										<!-- <th class="text-center">Acciones</th> -->
                    
									</tr>

								</thead>

								<tbody>

                  <?php   

                      $totalIncidencias = ControladorIncidenciasInventarios::ctrMostrarIncidenciaInventarios(null, null);

                      foreach ($totalIncidencias as $key => $value) {
                        
                        echo '<tr> 

                                <td>'.($key+1).'</td>';

                                $itemVehiculo = "idVehiculo";
                                $valorVehiculo = $value["vehiculo_id"];

                                $respuestaVehiculos = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo, $valorVehiculo);
                                
                        echo   '<td>'.$respuestaVehiculos["folio"].'-'.$respuestaVehiculos["serie"].'-'.$respuestaVehiculos["modelo"].'- Placas: '.$respuestaVehiculos["placas"].'</td>';

                                $itemResponsable = "idResponsable";
                                $valorResponsable = $value["responsable_id"];
                                $respuestaResponsable = ControladorUsuarios::ctrMostrarUsuarios($itemResponsable, $valorResponsable);
                        
                        echo    '<td>'.$respuestaResponsable["responsable"].'</td>
                                <td>'.ControladorPlantilla::FechaLarga($value["fecha"]).'</td>
                                <td>'.$value["descripcion"].'</td>
                                

                             </tr>';


                      }

                                          
                   ?>

								</tbody>

							</table>


						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

</div>




<?php 


}else {

  echo '<script>


          let timerInterval;

          Swal.fire({
              icon:"error",
              title: "¡ NO TIENES PRIVILEGIOS !",
              timer: 2000,
              timerProgressBar: true,

              didOpen: () => {

                Swal.showLoading();

                const timer = Swal.getPopup().querySelector("b");

                timerInterval = setInterval(() => {

                        timer.textContent = `${Swal.getTimerLeft()}`;

                    }, 100);

                  },

                  willClose: () => {

                    clearInterval(timerInterval);

                }

                }).then((result) => {

                   window.location = "inicio";

                });

        </script>';


} 



?>






<div id="modalAgregarSolictudVehiculoInventario" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-dark">

             <h4 class="modal-title text-uppercase">Nueva solicitud de inventario</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">



            <h6 class="text-bold text-uppercase pt-2">Selecciona la unidad o Vehiculo:</h6>

              <div  class="input-group mb-2 mr-sm-2">

                   <select name="nvaSolicitudInventario" id="nvaSolicitudInventarioId" class="form-control" required>

                     <option value="">-- SELECCIONA VEHICULO --</option>

                      <?php

                          $itemVe = null;
                          $valorVe = null;

                          $respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

                          foreach ($respuestaVe as $key => $value) {
                            
                            echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"].' - '.$value["placas"]." - ".$value["modelo"].'</option>';
                          }

                      ?>
                   </select>

              </div>


              <div class="row">

                <div class="col-12 col-md-6">

                  <h6 class="text-bold text-uppercase pt-2">Quien solicita:</h6>

                  <div  class="input-group mb-2 mr-sm-2">

                   <select name="nvaSolicitudUsuario" id="nvaSolicitudInUsuarioId" class="form-control" required>

                     <option value="">-- QUIEN REALIZA LA SOLICITUD --</option>

                     <?php

                     $itemUsario = "perfil_id";
                     $valorUsario = 5;
                     $itemUsario2 = "estado";
                     $valorUsario2 = 1;

                     $respuestaUsuarios = ControladorUsuarios::ctrMostrarUsuariosActivos($itemUsario, $valorUsario, $itemUsario2, $valorUsario2);

                     foreach ($respuestaUsuarios as $key => $value) {

                      echo '<option value="'.$value["idResponsable"].'">'.$value["responsable"].'</option>';
                    }

                    ?>
                  </select>

                </div>


              </div>


              <div class="col-12 col-md-6">

                <h6 class="text-bold text-uppercase pt-2">Fecha:</h6>

                <div  class="input-group mb-2 mr-sm-2">

                  <input type="date" name="nvaFechaInventario" class="form-control" required>

              </div>



            </div>



            </div>


         

            <h6 class="text-bold text-uppercase pt-2">Titulo de Solicitud</h6>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-align-center"></i></div>

                </span>

                   <input type="text" name="nvaSolicitudVehiculo" placeholder="TITULO DE SOLICITUD" required class="form-control input-lg" maxlength="255">

              </div>



            <h6 class="text-bold text-uppercase pt-2">Descripción de inventario</h6>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-align-center"></i></div>

                </span>


                   <textarea name="nvaDescripcionInventario" id="nvaDescripcionInventario" placeholder="DESCRIPCION DEL INVENTARIO..." class="form-control" required rows="8"></textarea>

              </div>
              
            </div>
       
     

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-dark text-uppercase"> registrar</button>

          </div>

          <?php 

            $nuevaIncidencia = new ControladorIncidenciasInventarios();
            $nuevaIncidencia -> ctrCrearIncidenciaInventarios();
            
           ?>

    </form>

    </div>
  </div>
</div>

