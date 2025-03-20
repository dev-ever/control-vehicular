<?php 


  $item = null;
  $valor = null; 

  $respuestaUsuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
  $totalUsuarios = count($respuestaUsuarios);

  $respuestaPerfiles = ControladorPerfiles::ctrMostrarPerfiles($item, $valor);
  $totalPerfiles = count($respuestaPerfiles);

  $respuestaAreas = ControladorAreasNegocios::ctrMostrarAreasNegocios($item, $valor);
  $totalAreas = count($respuestaAreas);

  $respuestaVehiculos = ControladorVehiculos::ctrMostrarVehiculos($item, $valor);
  $totalVehiculos = count($respuestaVehiculos);




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

              <h3><?php echo $totalUsuarios; ?></h3>

              <p class="text-uppercase">Usuarios</p>

            </div>

            <div class="icon">

              <i class="fa fa-users"></i>

            </div>

            <a href="usuarios" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>

          </div>


        </div>

        <!--  -->

         <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-success">

            <div class="inner">

              <h3><?php echo $totalPerfiles; ?></h3>

              <p class="text-uppercase">Perfiles</p>

            </div>

            <div class="icon">

              <i class="fa fa-cogs"></i>

            </div>

            <a href="perfiles" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
          

        </div>


        <!--  -->

         <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-secondary">

            <div class="inner">

              <h3><?php echo $totalAreas; ?></h3>

              <p class="text-uppercase">Areas | Negocios</p>

            </div>

            <div class="icon">

              <i class="fa fa-industry"></i>

            </div>

            <a href="unidad-negocios" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
          

        </div>





         <div class="col-12 col-sm-6 col-md-3">

          <div class="small-box bg-danger">

            <div class="inner">

              <h3><?php echo $totalVehiculos; ?></h3>

              <p class="text-uppercase">Vehiculos</p>

            </div>

            <div class="icon">

              <i class="fa fa-truck"></i>

            </div>

            <a href="nuevo-vehiculo" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
          

        </div>










      </div>

    </div>


  </section>





</div>