
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link text-center">

      <img src="vistas/img/plantilla/logo-blanco.png" alt="Control Vehicular" class="brand-image img-circle" style="opacity: .8">

      <span class="brand-text font-weight-light">Control Vehicular</span>
    </a>

    <!-- Sidebar --> 
    <div class="sidebar">
      <!-- Sidebar user panel (optional) --> 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image mx-auto">

          <?php 

          if($usuarioActivo["foto"] != ""){

           echo '<img src="'.$usuarioActivo["foto"].'" class="img-circle elevation-2" alt="User Image">';

          }else{

                echo '<img src="vistas/img/usuarios/default/anonymous.png" class="img-circle elevation-2" alt="User Image">';

          }

           ?>

        
        </div>

        <div class="info mr-auto">
        
          <a href="mi-perfil" class="d-block btnEditarPerfil" style="cursor: pointer;font-size:.8rem;"><?php echo strtoupper($usuarioActivo["responsable"]); ?> </a>
      
        </div>
      
      </div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column text-uppercase" data-widget="treeview" role="menu" data-accordion="false">

           <li class="nav-item">

            <a href="inicio" class="nav-link">

              <i class="nav-icon fas fa-home"></i>

              <p class="text-uppercase">Inicio</p>

            </a>

          </li>




          <?php 


          if($usuarioActivo["perfil_id"] == "1"){

           echo  '

                  <li class="nav-item">

                    <a href="usuarios" class="nav-link">

                      <i class="nav-icon fas fa-user"></i>

                    <p>Usuarios</p>

                   </a>

                  </li> 


                  <li class="nav-item">

                    <a href="perfiles" class="nav-link">

                      <i class="nav-icon fas fa-user"></i>

                    <p>Perfiles</p>

                   </a>

                  </li> 



                  <li class="nav-item">

                      <a href="unidad-negocios" class="nav-link">

                       <i class="nav-icon fas fa-pen"></i>

                       <p>Unidad negocios</p>

                      </a>

                   </li>


                  <li class="nav-item text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-circle"></i>

                            <p>Control Vehicular<i class="fas fa-angle-left right"></i></p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="altas-control-vehicular" class="nav-link">

                                <i class="fa fa-circle nav-icon"></i>

                                <p>Administración</p>

                              </a>

                            </li>

                            <li class="nav-item">

                              <a href="nuevo-vehiculo" class="nav-link">

                                <i class="fa fa-circle nav-icon"></i>

                                <p>Nuevo Vehiculo</p>

                              </a>

                            </li>

                          </ul>

                    </li>


                      <li class="nav-item text-uppercase">

                        <a href="#" class="nav-link">

                          <i class="nav-icon fas fa-list-alt"></i>

                          <p>Servicios Vehicular<i class="fas fa-angle-left right"></i></p>

                        </a>

                        <ul class="nav nav-treeview">

                          <li class="nav-item">

                            <a href="control-seguros" class="nav-link">

                              <i class="fas fa-edit nav-icon"></i>

                              <p>Seguros</p>

                            </a>

                          </li>

                          <li class="nav-item">

                            <a href="control-verificaciones" class="nav-link">

                              <i class="fas fa-check nav-icon"></i>

                              <p>Verificaciones</p>

                            </a>

                          </li>

                          <li class="nav-item">

                            <a href="control-tenencias" class="nav-link">

                              <i class="fas fa-check-square nav-icon"></i>

                              <p>Tenencia</p>

                            </a>

                          </li>

                          <li class="nav-item">

                            <a href="control-servicios" class="nav-link">

                              <i class="fas fa-cogs nav-icon"></i>

                              <p>Servicios / Taller </p>

                            </a>

                          </li>

                           <li class="nav-item">

                            <a href="control-tramites" class="nav-link">

                              <i class="fas fa-tv nav-icon"></i>

                              <p>Trámite Vehicular </p>

                            </a>

                          </li>

                        </ul>

                      </li>


                       <li class="nav-item user-panel text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-file"></i>

                            <p>Documentación<i class="fas fa-angle-left right"></i></p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="alta-documentos" class="nav-link">

                                <i class="fa fa-pen nav-icon"></i>

                                <p>Alta documentos</p>

                              </a>

                            </li>

                          </ul>

                      </li>




                     <li class="nav-item user-panel text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fa fa-arrow-circle-right"></i>

                            <p>Solicitudes Areas<i class="fas fa-angle-left right"></i></p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="alta-ticket-vehicular" class="nav-link">

                                <i class="fa fa-truck nav-icon"></i>

                                <p>Control Vehicular</p>

                              </a>

                            </li>

                          </ul>

                      </li>

                      <li class="nav-item">

                      <a href="logs" class="nav-link">

                      <i class="fa fa-calendar nav-icon"></i>

                      <p>Log de Eventos</p>

                      </a>

                      </li>





                   ';


          }else if($usuarioActivo["perfil_id"] == "2"){


            echo  '

                  <li class="nav-item">

                    <a href="usuarios" class="nav-link">

                      <i class="nav-icon fas fa-user"></i>

                    <p>Usuarios</p>

                   </a>

                  </li> 


                  <li class="nav-item">

                    <a href="perfiles" class="nav-link">

                      <i class="nav-icon fas fa-user"></i>

                    <p>Perfiles</p>

                   </a>

                  </li> 



                  <li class="nav-item">

                      <a href="unidad-negocios" class="nav-link">

                       <i class="nav-icon fas fa-pen"></i>

                       <p>Unidad negocios</p>

                      </a>

                   </li>';

                   



          }else if($usuarioActivo["perfil_id"] == "4"){

             echo  '<li class="nav-item text-uppercase">

                      <a href="#" class="nav-link">

                        <i class="nav-icon fas fa-circle"></i>

                        <p>Control Vehicular<i class="fas fa-angle-left right"></i></p>

                      </a>

                      <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="alta-ticket-vehicular" class="nav-link">

                                <i class="fa fa-circle nav-icon"></i>

                                <p>Solicitudes </p>

                              </a>

                            </li>

                            <li class="nav-item">

                              <a href="consulta-control-vehicular" class="nav-link">

                                <i class="fa fa-circle nav-icon"></i>

                                <p>Vehiculos</p>

                              </a>

                            </li>

                          </ul>

                     </li>';


          }else if($usuarioActivo["perfil_id"] == "5"){


              
                echo '<li class="nav-item">

                        <a href="usuarios" class="nav-link">

                         <i class="nav-icon fas fa-user"></i>

                        <p>Usuarios</p>

                        </a>

                      </li> 

                     <li class="nav-item">

                      <a href="unidad-negocios" class="nav-link">

                       <i class="nav-icon fas fa-pen"></i>

                       <p>Unidad negocios</p>

                      </a>

                   </li>


                   <li class="nav-item text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-circle"></i>

                            <p>Control Vehicular<i class="fas fa-angle-left right"></i></p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="altas-control-vehicular" class="nav-link">

                                <i class="fa fa-circle nav-icon"></i>

                                <p>Administración </p>

                              </a>

                            </li>

                            <li class="nav-item">

                              <a href="nuevo-vehiculo" class="nav-link">

                                <i class="fa fa-circle nav-icon"></i>

                                <p>Nuevo Vehiculo</p>

                              </a>

                            </li>

                              <li class="nav-item">

                              <a href="historial-inventarios" class="nav-link">

                                <i class="fa fa-list nav-icon"></i>

                                <p>Historial inventarios</p>

                              </a>

                            </li>

                          </ul>

                        </li>

                        <li class="nav-item text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-list-alt"></i>

                            <p>

                              Servicios Vehicular

                              <i class="fas fa-angle-left right"></i>

                              <!-- <span class="badge badge-info right">6</span> -->
                            </p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="control-seguros" class="nav-link">

                                <i class="fas fa-edit nav-icon"></i>

                                <p>Seguros</p>

                              </a>

                            </li>

                            <li class="nav-item">

                              <a href="control-verificaciones" class="nav-link">

                                <i class="fas fa-check nav-icon"></i>

                                <p>Verificaciones</p>

                              </a>

                            </li>

                            <li class="nav-item">

                              <a href="control-tenencias" class="nav-link">

                                <i class="fas fa-check-square nav-icon"></i>

                                <p>Tenencia</p>

                              </a>

                            </li>

                            <li class="nav-item">

                              <a href="control-servicios" class="nav-link">

                                <i class="fas fa-cogs nav-icon"></i>

                                <p>Servicios / Taller </p>

                              </a>

                            </li>

                             <li class="nav-item">

                              <a href="control-tramites" class="nav-link">

                                <i class="fas fa-tv nav-icon"></i>

                                <p>Trámite Vehicular </p>

                              </a>

                            </li>

                          </ul>

                        </li> 


                      <li class="nav-item text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-file"></i>

                            <p>Documentación<i class="fas fa-angle-left right"></i></p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="alta-documentos" class="nav-link">

                                <i class="fa fa-pen nav-icon"></i>

                                <p>Alta documentos</p>

                              </a>

                            </li>

                          </ul>

                      </li>


                      <li class="nav-item text-uppercase">

                          <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-file"></i>

                            <p>Solicitudes Vehiculos<i class="fas fa-angle-left right"></i></p>

                          </a>

                          <ul class="nav nav-treeview">

                            <li class="nav-item">

                              <a href="solicitudes-vehiculo" class="nav-link">

                                <i class="fa fa-pen nav-icon"></i>

                                <p>Solicitudes</p>

                              </a>

                            </li>

                            



                          </ul>

                      </li>




                        ';



          }






           ?>


           



   



    
    










        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
	