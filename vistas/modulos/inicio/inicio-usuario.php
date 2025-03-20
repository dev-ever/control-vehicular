 <?php 


  $item = null;
  $valor = null; 

 
  $respuestaVehiculos = ControladorVehiculos::ctrMostrarVehiculos($item, $valor);
  $totalVehiculos = count($respuestaVehiculos);

  $itemUsuario = "usuario_asignado_id";
  $valorUsuario = $_SESSION["idVehicular"];

  $respuestaVehiculosAsignados = ControladorVehiculos::ctrMostrarVehiculosUsuario($itemUsuario, $valorUsuario);
  $totalVehiculosAsignados = count($respuestaVehiculosAsignados);


  $itemUnidad = "area_id";
  $valorUnidad = $_SESSION["unidadVehicular"];

  $respuestaVehiculosUnidad = ControladorVehiculos::ctrMostrarVehiculosUsuario($itemUnidad, $valorUnidad);
  $totalVehiculosUnidad = count($respuestaVehiculosUnidad);

  $itemSolicitud = "solicitante_id";
  $valorSolicitud = $_SESSION["idVehicular"];

  $respuestaVehiculoSolicitud = ControladorVehiculos::ctrMostrarSolicitudesVehiculosPersonalizado($itemSolicitud, $valorSolicitud);
  $totalVehiculosSolicitudes = count($respuestaVehiculoSolicitud);



 

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

        <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-info">

            <div class="inner">

              <h3><?php echo $totalVehiculosAsignados; ?></h3>

              <p class="text-uppercase text-bold">Vehiculos Asignados</p>

            </div>

            <div class="icon">

              <i class="fa fa-car"></i>

            </div>

            <a href="consulta-control-vehicular" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>

          </div>


        </div>

        <!--  -->

         <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-success">

            <div class="inner">

              <h3><?php echo $totalVehiculosUnidad; ?></h3>

              <p class="text-uppercase">Asignados por unidad</p>

            </div>

            <div class="icon">

              <i class="fa fa-car"></i>

            </div>

            <a href="asignados-unidad" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
          

        </div>


        <!--  -->

         <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-secondary">

            <div class="inner">

              <h3><?php echo $totalVehiculosSolicitudes; ?></h3>

              <p class="text-uppercase">Solicitudes</p>

            </div>

            <div class="icon">

              <i class="fa fa-car"></i>

            </div>

            <a href="alta-ticket-vehicular" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
         
        </div>

         <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-danger">

            <div class="inner">

              <h3><?php echo $totalVehiculos; ?></h3>

              <p class="text-uppercase">Vehiculos</p>

            </div>

            <div class="icon">

              <i class="fa fa-car"></i>

            </div>

            <a href="nuevo-vehiculo" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
          

        </div>

      </div>

    </div>


  </section>


</div>