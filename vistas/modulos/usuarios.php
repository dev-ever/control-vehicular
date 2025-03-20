<?php if($usuarioActivo["perfil_id"] == "1" || $usuarioActivo["perfil_id"] == "2" || $usuarioActivo["perfil_id"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1>Administración de Usuarios</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion Usuarios

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

								<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarUsuario"> + Agregar Usuario</button> 

								
							</h3>
						
						</div>

						 <div class="card-body">

			                <table class="table table-bordered table-hover tablas tablaUsuarios">

			                  <thead>

				                  <tr>
				                   <th style="width:10px" class="text-center">#</th>
						           <th>Nombre</th>
						           <th class="text-center">Usuario</th>
						           <th class="text-center">Foto</th>
						           <th class="text-center">Perfil</th>
						           <th class="text-center">Estado</th>
						           <th class="text-center">Último login</th>
						           <th class="text-center">Autorizador</th>
						           <th class="text-center">Acciones</th>
				                  </tr>
				                  
			                  </thead>
			                  
			                  <tbody>
			                

						    <?php

						        $item = null;
						        $valor = null;

						        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
						        // var_dump($usuarios);

						       foreach ($usuarios as $key => $value){
						         
						          echo ' <tr class="bordes">
						                  <td class="text-center">'.($key+1).'</td>
						                  <td>'.strtoupper($value["responsable"]).'</td>

						                  <td class="text-center text-bold">

						                      <button class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Usuario: '.$value["usuario"].', Password default: 123456">'.$value["usuario"].'</button>

						                  </td>';

						                  if($value["foto"] != ""){

						                    echo '<td class="text-center"><img src="'.$value["foto"].'" class="img-thumbnail zoom_01" width="40px"></td>';

						                  }else{

						                    echo '<td class="text-center"><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail zoom_01" width="40px"></td>';

						                  }

						                  $itemPerfil = "idPerfil";
						                  $valorPerfil = $value["perfil_id"];
						                  
						                  $perfil = ControladorPerfiles::ctrMostrarPerfiles($itemPerfil, $valorPerfil);

						                  if(is_array($perfil)){

						                  	 echo '<td class="text-center">'.strtoupper($perfil["perfil"]).'</td>';

						                  }else{

						                  	 echo '<td class="text-center"></td>';

						                  }

						                 

						                  if($value["estado"] != 0){

						                    echo '<td class="text-center"><button class="btn btn-success btn-xs btnActivar"  idUsuario="'.$value["idResponsable"].'" idSesion="'.$_SESSION["idVehicular"].'" estadoUsuario="0" data-tooltip="tooltip" title="DESACTIVAR">Activado</button></td>';

						                  }else{

						                    echo '<td class="text-center"><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["idResponsable"].'" idSesion="'.$_SESSION["idVehicular"].'" estadoUsuario="1" data-tooltip="tooltip" title="ACTIVAR">Desactivado</button></td>';

						                  }             

						                  echo '<td class="text-center">'.ControladorPlantilla::fechaLarga($value["ultimoLogin"]).'</td>';

						                  if($value["autorizador"] == "0" ){ 

						                  	echo '<td class="text-center">

						                  	        <button style="width:25px;height:25px;" class="btn btn-default btn-xs m-2 btnNuevoAutorizador border border-info" idUsuario="'.$value["idResponsable"].'"  data-bs-toggle="modal" data-bs-target="#modalNuevoAutorizador">

						                  	            <i class="fa fa-minus" data-tooltip="tooltip" data-placement="top" title="AGREGAR AUTORIZADOR"></i>

						                  	          </button><br>

						                  	          <span class="text-info text-uppercase font-weight-bold">Sin Autorizador</span>

						                  	     </td>';

						                  }else{

						                  	$itemAutorizador = "idResponsable";
						                  	$valorAutorizador = $value["autorizador"];

						                  	$respuestaAutorizador = ControladorUsuarios::ctrMostrarUsuarios($itemAutorizador, $valorAutorizador);

						                  	if(is_array($respuestaAutorizador)){

						                  		echo '<td class="text-center">

						                  		        <button style="width:25px;height:25px;" class="btn btn-info btn-xs m-2 btnCambiarAutorizador p-1" idUsuario="'.$value["idResponsable"].'" data-bs-toggle="modal" data-bs-target="#modalCambiarAutorizador" data-tooltip="tooltip" data-original-title="Cambiar autorizador"">

						                  		           <i class="fa fa-check"></i>

						                  		        </button>

						                  		        <br>

						                  		        <span class="text-success font-weight-bold">'.strtoupper($respuestaAutorizador["responsable"]).'</span>

						                  		      </td>';

						                  	}

						                  }

						            echo   '<td class="text-center">';

						            			if($usuarioActivo["perfil_id"] == "1" || $usuarioActivo["perfil_id"] == "2"){


						            				echo '<button class="btn btn-warning btn-xs  btnEditarUsuario" idSesion="'.$_SESSION["idVehicular"].'" idUsuario="'.$value["idResponsable"].'" data-bs-toggle="modal" data-bs-target="#modalEditarUsuario" data-tooltip="tooltip" data-placement="top" title="EDITAR USUARIO">EDITAR</button>

						               

						                      			<button class="btn btn-danger btn-xs  btnEliminarUsuario" idSesion="'.$_SESSION["idVehicular"].'" idUsuario="'.$value["idResponsable"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'" data-tooltip="tooltip" data-placement="top" title="ELIMINAR">ELIMINAR</button>';



						            			}else{

						            				echo '<button class="btn btn-warning btn-xs  btnEditarUsuario" idSesion="'.$_SESSION["idVehicular"].'" idUsuario="'.$value["idResponsable"].'" data-bs-toggle="modal" data-bs-target="#modalEditarUsuario" data-tooltip="tooltip" data-placement="top" title="Editar">EDITAR</button>';


						            			}
						                    
						                        
						                      

						                  

						            echo     '</td>

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
	
	window.location = "inicio";

	</script>';
} 



?>







<!--=====================================
=  MODAL AGREGAR USUARIO           =
======================================-->

<div id="modalAgregarUsuario" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">
          	 <h4 class="modal-title text-uppercase">Agregar Usuario</h4>
            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<label for="nuevoNombreId">Nombre completo</label>

              <div  class="input-group mb-2 mr-sm-2">
                
                <span class="input-group-prepend">
                
                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>
                
                  </span>
                
                   <input type="text" id="nuevoNombreId" name="nuevoNombre" placeholder="Ingresa Nombre" required class="form-control input-lg">
              
              </div>

              <label for="nuevoEmailId">Correo electrónico</label>

               <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-envelope"></i></div>

                  </span>

                 <input type="text" name="nuevoEmail" id="nuevoEmailId" placeholder="Ingresa email" autocomplete="on" required class="form-control input-lg nuevoEmail">

              </div>

              <label for="nuevoPasswordId">Contraseña</label>

               <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-lock"></i></div>

                  </span>

                 <input type="password" name="nuevoPassword" id="nuevoPasswordId" placeholder="Ingresa Contraseña" required class="form-control input-lg" autocomplete="new-password">

              </div>

              <label for="nPerfilId">Perfil</label>

               <div  class="input-group mb-2 mr-sm-2">

	                <span class="input-group-prepend">
	                
	                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-users"></i></div>
	                
	                </span>


	                <?php 


	                	if($usuarioActivo["perfil_id"] == "1" || $usuarioActivo["perfil_id"] == "2"){

	                	    echo  '<select class="form-control input-lg text-uppercase" name="nuevoPerfil" id="nPerfilId">
	          
	                 	              <option value="">Seleccione Perfil</option>';

				                    	$itemPerfil = null;
				                    	$valorPerfil = null;

				                    	$perfiles = ControladorPerfiles::ctrMostrarPerfiles($itemPerfil,$valorPerfil);

				                  		foreach ($perfiles as $key => $value) {
				                  			
				                  			echo ' <option value="'.$value["idPerfil"].'">'.$value["perfil"].'</option>';
				                  		}

	             
                			echo '</select>';


	                	}else{


	                		echo  '<select class="form-control input-lg text-uppercase" name="nuevoPerfil" id="nPerfilId">
	          
	                 	              <option value="">Seleccione Perfil</option>';

				                    	$itemPerfil = "perfilActivo";
				                    	$valorPerfil = 1;

				                    	$perfiles = ControladorPerfiles::ctrMostrarPerfilesVehicular($itemPerfil,$valorPerfil);

				                  		foreach ($perfiles as $key => $value) {
				                  			
				                  			echo ' <option value="'.$value["idPerfil"].'">'.$value["perfil"].'</option>';
				                  		}



	                	}

	                	echo '</select>';

	                 ?>
	                 
	               
               
              	</div>


             <label for="nuevaAreaId">Unidad o Area de negocio</label>

               <div  class="input-group mb-2 mr-sm-2">

	                <span class="input-group-prepend">
	                
	                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-users"></i></div>
	                
	                </span>
	                 
	                 <select class="form-control input-lg text-uppercase" name="unidadNegocio" id="nuevaAreaId">
	          
	                 	<option value="">Seleccione Area / Negocio</option>
	                
 						<?php 

	                    	$itemNegocio = null;
	                    	$valorNegocio = null;

	                    	$areas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemNegocio,$valorNegocio);

	                  		foreach ($areas as $key => $value) {
	                  			
	                  			echo ' <option value="'.$value["idAreaVehiculo"].'">'.$value["area"].'</option>';
	                  		}

	                     ?>
                	</select>
               
              	</div>



              <div class="form-group">

                <div class="panel">Subir foto</div>

            

                <input type="file" class="form-control nuevaFotoId" name="nuevaFoto">

                <p class="help-block">Peso máximo de la foto 2 MB</p>

                <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar Usuario</button>

          </div>

          <?php 

            $crearUsuario = new ControladorUsuarios();
            $crearUsuario -> ctrCrearUsuario();
    

           ?>

    </form>

    </div>
  </div>
</div>



<!--=====================================
=  MODAL EDITAR USUARIO           =
======================================-->

<div id="modalEditarUsuario" class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

    	 <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Usuario</h4>
          	 
            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">



              <label for="">Nombre completo</label>
              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                  </span>

                   <input type="text" name="editarNombre" id="editarNombre"  required class="form-control input-lg">

              </div>

              <label for="">Usuario</label>
               <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-key"></i></div>

                  </span>

                  <input type="text" name="editarUsuario1" id="editarUsuario1" disabled="" class="form-control input-lg">
                  <input type="hidden" name="editarUsuario2" id="editarUsuario2">
                  <input type="hidden" name="responsable_id" id="responsable_id" required>

              </div>

              <label for="">Correo electrónico</label>
               <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-envelope"></i></div>

                  </span>

                 <input type="text" name="editarEmail" id="editarEmail" autocomplete="on" required class="form-control input-lg">

              </div>

              <label for="">Contraseña</label>
               <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-lock"></i></div>

                  </span>

                 <input type="password" name="editarPassword" id="editarPassword" class="form-control input-lg" autocomplete="new-password" placeholder="Solo cambia si agrega una nueva contraseña">
                 <input type="hidden" id="passwordActual" name="passwordActual" required>

              </div>

              <label for="editPerfilId">Perfil</label>

                <div  class="input-group mb-2 mr-sm-2">

	                <span class="input-group-prepend">
	                
	                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-users"></i></div>
	                
	                </span>




	                <?php 


	                	if($usuarioActivo["perfil_id"] == "1" || $usuarioActivo["perfil_id"] == "2"){

	                	    echo  '<select class="form-control input-lg" name="editarPerfil" id="editPerfilId">
	          
	                 	              <option value="" id="editarPerfil">Seleccione Perfil</option>';

				                    	$itemPerfil = null;
				                    	$valorPerfil = null;

				                    	$perfiles = ControladorPerfiles::ctrMostrarPerfiles($itemPerfil,$valorPerfil);

				                  		foreach ($perfiles as $key => $value) {
				                  			
				                  			echo ' <option value="'.$value["idPerfil"].'">'.strtoupper($value["perfil"]).'</option>';
				                  		}

	             
                			echo '</select>';


	                	}else{


	                		echo  '<select class="form-control input-lg" name="editarPerfil" id="editPerfilId">
	          
	                 	              <option value="" id="editarPerfil">Seleccione Perfil</option>';

				                    	$itemPerfil = "perfilActivo";
				                    	$valorPerfil = 1;

				                    	$perfiles = ControladorPerfiles::ctrMostrarPerfilesVehicular($itemPerfil,$valorPerfil);

				                  		foreach ($perfiles as $key => $value) {
				                  			
				                  			echo ' <option value="'.$value["idPerfil"].'">'.strtoupper($value["perfil"]).'</option>';
				                  		}



	                	}

	                	echo '</select>';

	                 ?>



 
              	</div>


            <label for="editarAreaId">Unidad o Area de negocio</label>

               <div  class="input-group mb-2 mr-sm-2">

	                <span class="input-group-prepend">
	                
	                  	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-users"></i></div>
	                
	                </span>
	                 
	                 <select class="form-control input-lg text-uppercase" name="editarArea" id="editarAreaId">
	          
	                 	<option value="" id="valorAreaId">Seleccione Area / Negocio</option>
	                
 						<?php 

	                    	$itemNegocio = null;
	                    	$valorNegocio = null;

	                    	$areas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemNegocio,$valorNegocio);

	                  		foreach ($areas as $key => $value) {
	                  			
	                  			echo ' <option value="'.$value["idAreaVehiculo"].'">'.$value["area"].'</option>';
	                  		}

	                     ?>
                	</select>
               
              	</div>



              <div class="form-group">

                <div class="panel">Subir foto</div>

                <input type="file" class="form-control editarFoto" name="editarFoto">

                <!-- <input type="file" class="" name=""> --> 

                <p class="help-block">Peso máximo de la foto 2 MB</p>

                <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                <input type="hidden" name="fotoActual" id="fotoActual">

              </div>


            </div>

        </div>

   		<div id="solicitud"></div>
<!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar cambios</button>

          </div>
         <?php 

            $editUsuario = new ControladorUsuarios();
            $editUsuario -> ctrEditarUsuario();

         ?>
    </form>


   </div>

 </div>

</div>


<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 






<div id="modalNuevoAutorizador" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

             <h4 class="modal-title text-uppercase">Agregar Autorizador  | <span id="nombreUsuarioId"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <h6 class="text-uppercase">Nombre del autorizador</h6>

              <div  class="input-group mb-2 mr-sm-2">

               <!--  <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span> -->

                  <select name="nuevoAutorizador" id="nuevoAutorizador" class="form-control selectpicker" data-live-search="true" required="">

                    <option value="nuevoAutorizadorId"> -- SELECCIONAR AL AUTORIZADOR -- </option>

                    <?php 

                      $itemUsuario = null;
                      $valorUsuario = null;

                      $respuestaAutoriza = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                      foreach ($respuestaAutoriza as $key => $value) {
                        
                        echo '<option value='.$value["idResponsable"].'>'.strtoupper($value["responsable"]).', '.$value["email"].'</option>';

                      }

                     ?>

                  </select>

                  <input type="hidden" name="idAutorizaUsr" id="idAutorizaUsrId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar</button>

          </div>

          <?php 

            $nvoAutorizador = new ControladorUsuarios();
            $nvoAutorizador -> ctrActualizarUsuarioAutorizador();
            

           ?>

    </form>

    </div>

  </div>

</div>






<!--=====================================
=  MODAL EDITAR AUTORIZADOR USUARIO           =
======================================-->

<div id="modalCambiarAutorizador" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

             <h4 class="modal-title text-uppercase">Cambiar Autorizador  | <span id="nombreCambiarUsuarioId"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <h6 class="text-uppercase">Nombre del autorizador</h6>

              <div  class="input-group mb-2 mr-sm-2">

          <!--       <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span> -->

                  <select name="nuevoAutorizador" id="nuevoCambiarAutorizador" class="form-control selectpicker" data-live-search="true" required="">

                    <option value="nuevoAutorizadorId"> -- SELECCIONAR AL AUTORIZADOR -- </option>

                    <?php 

                      $itemUsuario = null;
                      $valorUsuario = null;

                      $respuestaAutoriza = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                      foreach ($respuestaAutoriza as $key => $value) {
                        
                        echo '<option value='.$value["idResponsable"].'>'.strtoupper($value["responsable"]).', '.$value["email"].'</option>';

                      }

                     ?>

                  </select>

                  <input type="hidden" name="idAutorizaUsr" id="idAutorizaCambiarUsrId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Cambiar</button>

          </div>

          <?php 

            $editAutorizador = new ControladorUsuarios();
            $editAutorizador -> ctrActualizarUsuarioAutorizador();
            
           ?>
    </form>

    </div>

  </div>

</div>