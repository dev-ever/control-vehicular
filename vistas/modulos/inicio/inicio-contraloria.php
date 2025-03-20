<?php 

$item = null;
$valor = null;

  $respuestaTipos = ControladorTiposIncidencias::ctrMostrarTiposIncidencias($item,$valor);
  $totalTipos = count($respuestaTipos);

  $solicitudesImportante = ControladorIncidencias::ctrMostrarIncidenciasGral("caracterIncidencia", 0);
  $totalImportante = count($solicitudesImportante);

  $solicitudesUrgente = ControladorIncidencias::ctrMostrarIncidenciasGral("caracterIncidencia", 1);
  $totalUrgentes = count($solicitudesUrgente);

  $solicitudesTotales = ControladorIncidencias::ctrMostrarIncidencias(null, null);
  $totalsTotales = count($solicitudesTotales);


 ?>

<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Dashboard Sistema de Monitoreo</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item">

              <a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio </a>

            </li>

            <li class="breadcrumb-item active">

              Control Monitoreo

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

            <div class="info-box">

              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">

                <span class="info-box-text text-center">Tipos de Incidencias</span>

                <span class="info-box-number text-center">

                  <?php echo $totalTipos; ?>
                 

                </span>

              </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">

          <a href="incidencias">

            <div class="info-box">

              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-video"></i></span>

              <div class="info-box-content">

                <span class="info-box-text text-center">Incidencias Importantes</span>

                <span class="info-box-number text-center">

                  <?php echo $totalImportante; ?>


                </span>

              </div>

            </div>

          </a>

        </div>

        <div class="col-12 col-sm-6 col-md-3">

          <a href="incidencias">

            <div class="info-box mb-3">

              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-video"></i></span>

              <div class="info-box-content">

                <span class="info-box-text text-center">Incidencias Urgentes</span>

                <span class="info-box-number text-center"> <?php echo $totalUrgentes; ?></span>

              </div>

            </div>

        </a>

        </div>


         <div class="col-12 col-sm-6 col-md-3">

          <a href="incidencias">

            <div class="info-box mb-3">

              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tv"></i></span>

              <div class="info-box-content">

                <span class="info-box-text text-center">Incidencias Totales</span>

                <span class="info-box-number text-center"> <?php echo $totalsTotales; ?></span>

              </div>

            </div>

          </a>

        </div>







      </div>

    </div>


  </section>

</div>