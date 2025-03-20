
<div id="ba-login"></div>


 
    <div class="backMain">

<!-- 
        <div class="contenedor-formulario contenedor">

        <div class="imagen-formulario">
            
        </div>

        <form class="formulario">

            <div class="texto-formulario">

                <h2>Bienvenido de nuevo</h2>

                <p>Inicia sesión con tu cuenta</p>

            </div>

            <div class="input">

                <label for="usuario">Usuario</label>

                <input placeholder="Ingresa tu nombre" type="text" id="usuario">

            </div>

            <div class="input">

                <label for="contraseña">Contraseña</label>

                <input placeholder="Ingresa tu contraseña" type="password" id="contraseña">

            </div>

            <div class="password-olvidada">

                <a href="#">¿Olvidaste tu contraseña?</a>

            </div>

            <div class="input">

                <input type="submit" value="Login">

            </div>

        </form>

    </div> -->


     <label class="py-2 text-uppercase text-center"> Control Vehicular </label>

        <div class="login-box m-auto">
        
            <div class="login-logo"> 
          
           

              <img src="vistas/img/plantilla/vehiculo.png" class="img-fluid" style="padding:30px 100px 0px 100px">

            </div>


          <div class="login-box-body">

            <p class="login-box-msg text-uppercase">Entrar</p>

            <form method="post">

                <div class="form-group has-feedback">

                  <input type="text" class="form-control input-personalizado rounded-pill" placeholder="Usuario" name="ingUsuario" required>

                  <span class="glyphicon glyphicon-user form-control-feedback"></span>

                </div>

                <div class="form-group has-feedback">

                  <input type="password" class="form-control input-personalizado rounded-pill" placeholder="Contraseña" name="ingPassword" required autocomplete="on">

                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                
                </div>

                <div class="row py-3">
                 
                  <div class="col-xs-12 col-md-12">

                      <button type="submit" class="btn btn-success btn-block btn-flat text-uppercase rounded-pill"><strong> I n g r e s a r </strong> </button>
                    
                  </div>


                </div>

            <?php

              $login = new ControladorUsuarios();
              $login -> ctrIngresoUsuario();
              


              
            ?>

          </form>

          </div>

        </div> 


       </div>



