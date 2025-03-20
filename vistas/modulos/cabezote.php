
<?php 
  
    //LLAMDO DE USUARIO CON SESSION ACTIVA
    $itemUsuario = "idResponsable";
    $valorUsuario = $_SESSION["idVehicular"];

    $usuarioActivo = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

 ?>

  <nav class="main-header navbar navbar-expand navbar-success navbar-light">

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

    </ul>

    <ul class="navbar-nav ml-auto">

      <!--  -->


      <?php 

      $itemVehiculo = null;
      $valorVehiculo = null;
      $campo = "idvehiculo";
      $orden = "DESC";

      $vehiculos = ControladorVehiculos::ctrMostrarUltimosVehiculos($itemVehiculo, $valorVehiculo, $campo, $orden); 

       ?>

        <li class="nav-item dropdown">

        <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">

          <i class="far fa-comments"></i>

          <span class="badge badge-warning navbar-badge"> <?php echo count($vehiculos); ?> </span>

        </a>

        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xl dropdown-menu-right" style="left: inherit; right: 0px;">

          <a href="#" class="dropdown-item scroll-items">

            <div class="header text-center text-bold py-1">Últimos: <?php echo count($vehiculos);?> vehiculos recientes</div>
          
          
          <?php 

              foreach ($vehiculos as $key => $value) {

                $respuestaMarcas = ControladorMarcas::ctrMostrarMarcas("idMarca", $value["marca_id"]);
                $respuestaSubMarcas = ControladorSubMarcas::ctrMostrarSubMarcas("idSubmarca", $value["subMarca_id"]);

                echo '<div class="dropdown-divider py-1"></div>
        
                       <div class="media">';

                echo   '<img src="vistas/img/plantilla/vehiculo.png" alt="User Avatar" class="img-size-50 mr-3 img-circle border border-light shadow">';

                echo     '<div class="media-body">

                            <h3 class="dropdown-item-title text-info">

                              Folio: '.$value["folio"].'

                            </h3>

                            <p class="text-sm text-success">Placas: '.$value["placas"].', Eco: '.$value["eco"].'</p>

                            <p class="text-sm text-muted"> Serie: '.$value["serie"].'</p>

                            <p class="text-sm text-muted"> '.$respuestaMarcas["marca"].' | '.$respuestaSubMarcas["submarca"].' </p>

                          </div> 

                      </div>';
              }

          ?>



          </a>




          <div class="dropdown-divider"></div>

          <a href="nuevo-vehiculo" class="dropdown-item dropdown-footer text-uppercase">Ver todos</a>

        </div>

      </li>




      <!--  -->

      <li class="nav-item dropdown">
        
        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" id="navPerfil" style="margin-top: -26px;">

          <?php

          if($usuarioActivo["foto"] != ""){
        
            echo '<img src="'.$usuarioActivo["foto"].'" class="img-circle user-cabezote">';

          }else{

            echo '<img src="'.$url.'vistas/img/usuarios/default/anonymous.png" class="img-circle user-cabezote">';

          }

          ?>
          
            <span class="hidden-xs text-white"><?php  echo strtoupper($usuarioActivo["responsable"]); ?></span>
 
        </a>



        <ul class="dropdown-menu bg-success dropdown-menu-right" aria-labelledby="navPerfil" style="margin-top: 10px;">

            <li class="user-headerp-3 m-3 text-center">

               <?php 
               echo '<div class="text-center py-2">';

                if($usuarioActivo["foto"] != ""){

                    echo '<img src="'.$url.$usuarioActivo["foto"].'" class="img-size-50 mr-3 img-circle">';

                }else{

                  echo '<img src="'.$url.'vistas/img/usuarios/default/anonymous.png" class="img-size-50 mr-3 img-circle">';

                }

                echo '</div>';
             

                  $item = "idPerfil";
                  $valor = $usuarioActivo["perfil_id"];

                  $perfiles = ControladorPerfiles::ctrMostrarPerfiles($item, $valor);

                 ?>

                 <span><small style="color: #fff;text-transform: lowercase;text-align: center;"><?php echo $usuarioActivo["email"]; ?></small></span>
                 <span><h6 style="color: #fff;text-transform: uppercase;text-align: center;"><?php echo $perfiles["perfil"]; ?></h6></span>
                


                <small style="color: #fff;">Miembro desde: <br> <?php echo $miembro = ControladorPlantilla::fechaLarga($usuarioActivo["fecha"]); ?> </small>

                 


                <hr style="border:0.1px solid #fff;">
                  
                <li class="nav-item text-center d-flex justify-content-around pb-2">

                    <div><a href="salir" class="btn btn-light  btn-flat"> <i class="fa fa-times"></i> Salir </a></div>
                    <div><a href="mi-perfil"><button class="btn btn-light btn-flat"> <i class="fa fa-user"></i> Mi perfil </button></a></div>

                </li>

            </li>
        
        </ul>


    </ul>




  </nav>



