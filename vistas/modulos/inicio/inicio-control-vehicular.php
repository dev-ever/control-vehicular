<?php 

setlocale(LC_TIME, 'es_ES.UTF-8'); //Linux

 $itemUsuario = "idResponsable"; 
 $valorUsuario = $_SESSION["idVehicular"];

$usuariosControlVehicular = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);


$itemStatus = "estado";
$valorStatus = 0;

$respuestaNuevasSol = ControladorVehiculos::ctrMostrarSolicitudesVehiculosEstado($itemStatus, $valorStatus);


if($respuestaNuevasSol){

  if($_SESSION["perfilVehicular"] == "1" && $usuariosControlVehicular["session_log"] == "1" || 
     $_SESSION["perfilVehicular"] == "2" && $usuariosControlVehicular["session_log"] == "1" || 
     $_SESSION["perfilVehicular"] == "5" && $usuariosControlVehicular["session_log"] == "1"){

    echo "<script>

              $(document).ready(function() {

              $('#modalAlertaSolicitudes').modal('show');  

              });

          </script>";
 
      $itemx1 = "session_log";
      $valorx1 = 0;
      $itemx2 = "idResponsable";
      $valorx2 = $_SESSION["idVehicular"];

      ControladorUsuarios::ctrActualizarUsuario($itemx1, $valorx1, $itemx2, $valorx2);

  }

  
}



/*========================================

  1 - utilitario
  2.- Servicios             => 4
  3.- Maquinaria pesada     => 2
  4.- Maquinaria ligera     => 1
  5.- Transporte interno    => 3

===========================================*/

    $item = null;
    $valor = null; 

    $respuestaVehiculos = ControladorVehiculos::ctrMostrarVehiculos($item, $valor);
    $totalVehiculos = count($respuestaVehiculos);

    $respuestaVehiculosUtilitario = ControladorVehiculos::ctrMostrarVehiculosTotales("clase_id","5");
    $totalVehiculosUtilitarios = count($respuestaVehiculosUtilitario);

    $respuestaVehiculosServicios = ControladorVehiculos::ctrMostrarVehiculosTotales("clase_id","4");
    $totalVehiculosServicios = count($respuestaVehiculosServicios);

    $respuestaVehiculosPesada = ControladorVehiculos::ctrMostrarVehiculosTotales("clase_id","2");
    $totalVehiculosPesada = count($respuestaVehiculosPesada);

    $respuestaVehiculosLigera = ControladorVehiculos::ctrMostrarVehiculosTotales("clase_id","1");
    $totalVehiculosLigera = count($respuestaVehiculosLigera);

    $respuestaVehiculosInterno = ControladorVehiculos::ctrMostrarVehiculosTotales("clase_id","3");
    $totalVehiculosInterno = count($respuestaVehiculosInterno);


   $serviciosVehiculares = ControladorServiciosVehiculares::ctrMostrarServiciosVehiculares($item,$valor);



 ?>

<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Dashboard Sistema de Control Vehicular</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item">

              <a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio </a>

            </li>

            <li class="breadcrumb-item active">

              Control Vehicular

            </li>

          </ol>

        </div>

      </div>

    </div>

  </section>


  <section class="content">

    <div class="container-fluid">

      <div class="row">

          <div class="col-12 col-sm-6 col-md-2">

              <div class="info-box">

                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-car"></i></span>

                <div class="info-box-content">

                  <span class="info-box-text text-center">Transporte Interno</span>

                  <span class="info-box-number text-center">

                    <?php echo $totalVehiculosInterno; ?>
                   

                  </span>

                </div>

              </div>

          </div>


          <div class="col-12 col-sm-6 col-md-2">

            <div class="info-box mb-3">

              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-car"></i></span>

              <div class="info-box-content">

                <span class="info-box-text">Transporte de Servicios</span>

                <span class="info-box-number text-center"> <?php echo $totalVehiculosServicios; ?></span>

              </div>

            </div>

          </div>


        <!-- <div class="clearfix hidden-md-up"></div> -->

        <div class="col-12 col-sm-6 col-md-2">

          <div class="info-box mb-3">

            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-car"></i></span>

            <div class="info-box-content">

              <span class="info-box-text text-center">Maquinaria Ligera</span>

              <span class="info-box-number text-center"> <?php echo $totalVehiculosLigera; ?></span>

            </div>

          </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">

          <div class="info-box mb-3">

            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-car"></i></span>

            <div class="info-box-content">

              <span class="info-box-text text-center">Maquinaria Pesada</span>

              <span class="info-box-number text-center"> <?php echo $totalVehiculosPesada; ?></span>

            </div>

          </div>

        </div>



        <div class="col-12 col-sm-6 col-md-3">


          <a href="nuevo-vehiculo">

          <div class="info-box mb-3">

            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-car"></i></span>

            <div class="info-box-content">

              <span class="info-box-text text-center">Totales</span>

              <span class="info-box-number text-center"><?php echo $totalVehiculos; ?></span>

            </div>

          </div>

        </a>

        </div>



      </div>




      <div class="card">

        <div class="card-header border-transparent bg-light">

          <h3 class="card-title text-bold text-uppercase">Últimos Servicios aplicados a vehiculos</h3>

          <div class="card-tools">

            <button type="button" class="btn btn-tool" data-card-widget="collapse">

              <i class="fas fa-minus"></i>

            </button>

            <button type="button" class="btn btn-tool" data-card-widget="remove">

              <i class="fas fa-times"></i>

            </button>

          </div>

        </div>

        <div class="card-body p-0">

          <div class="table-responsive table-hover">

            <table class="table m-0">

              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Folio</th>
                  <th class="text-center">Vehiculo</th>
                  <th class="text-center">Servicio</th>
                  <th class="text-center">Taller</th>
                  
                  <th class="text-center">Fecha</th>
                </tr>
              </thead>
              
              <tbody>

                <?php 

                  for($i=0;$i<10; $i++){


                    echo ' 

                          <tr>

                              <td class="text-center">'.($i+1).'</td>';

                              $itemVehiculo = "idVehiculo";
                              $valorVehiculo = $serviciosVehiculares[$i]["vehiculo_id"];

                              $respuestaVehiculo = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo,$valorVehiculo);


                       echo   '<td class="text-center">'.$respuestaVehiculo["folio"].'</td>

                              <td class="text-center"><span class="badge badge-primary p-2">'.$respuestaVehiculo["modelo"].'</span></td>

                              <td class="text-center"><span style="cursor:pointer;" class="text-success text-uppercase cursor-pointer" data-tooltip="tooltip" data-original-title="'.$serviciosVehiculares[$i]["observaciones"].'">'.$serviciosVehiculares[$i]["servicio"].'</span></td>

                              <td class="text-center">

                              <div class="sparkbar" data-color="#00a65a" data-height="20">'.$serviciosVehiculares[$i]["taller"].'</div>

                              </td>';

                              $hoy = date("Y-m-d");

                              if($hoy > $serviciosVehiculares[$i]["fecha"]){

                                echo '<td class="text-center"><span class="badge badge-success p-2">'.$serviciosVehiculares[$i]["fecha"].'</span></td>';

                              }else{

                                echo '<td class="text-center"><span class="badge badge-danger p-2">'.$serviciosVehiculares[$i]["fecha"].'</span></td>';
                              }
                            
                            
                         echo  '</tr>

                          <tr>';
                  }

                 ?>

              </tbody>
            
            </table>

          </div>

        </div>

        <div class="card-footer clearfix">

          <a href="control-servicios" class="btn btn-sm btn-info float-left text-uppercase">Ver todos</a>

          <a href="altas-control-vehicular" class="btn btn-sm btn-secondary float-right text-uppercase">Administración</a>

        </div>

      </div>



      
    </div>
    
  </section>




</div>










 <div id="modalAlertaSolicitudes" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content rounded-0">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

          <div class="modal-header">

            <h6 class="modal-title text-bold text-uppercase text-info"> ¡ Solicitudes Nuevas - control vehicular !</h6>  

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>


          <div class="modal-body cuerpo-notificaciones">

            <div class="box-body">

              <table id="tablaNotificaciones" class="table table-bordered table-hover tablaNotificacionesVehicular" width="100%">

                <thead class="table-info">

                  <tr>
                    <th style="width:10px" class="text-center">#</th>
                    <th class="text-center">Solicitante</th>
                    <th class="text-center">Solicitud</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Fecha</th>
                  </tr>

                </thead>

                <tbody>

                  <?php 


                    $itemEstado = "estado";
                    $valorEstado = 0;

                    $respuestaNuevasSolicitudes = ControladorVehiculos::ctrMostrarSolicitudesVehiculosEstado($itemEstado, $valorEstado);

                    foreach ($respuestaNuevasSolicitudes as $key => $value) {

                      echo '<tr>

                              <td class="text-center">'.($key+1).'</td>';

                              $user = "idResponsable";
                              $val = $value["solicitante_id"];

                              $usuariosControlVehicular = ControladorUsuarios::ctrMostrarUsuarios($user, $val);

                      echo   '<td class="text-center">'.$usuariosControlVehicular["responsable"].'</td>
                              <td class="text-center">'.$value["titulo"].'</td>';

                              if($value["estado"] == "0"){

                                echo ' <td class="text-center text-uppercase"> <span class="badge badge-light p-1">Solicitado</span> </td>';

                              }else{

                                echo ' <td class="text-center">Sin estado</td>';

                              }

                      echo    ' <td class="text-center">'.(strftime("%A, %d de %B del %Y", strtotime($value["created_at"]))).'</td>


                           </tr>';
                      
                    }


                   ?>

           

                </tbody>
              </table>


            </div>

          </div>


          <div class="modal-footer">

            <button type="button" class="btn btn-default btn-sm pull-left" data-bs-dismiss="modal">Cerrar</button>

          </div>



    </form>

    </div>

  </div>

</div>

