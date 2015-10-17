
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
<?php 
 
session_start();
if(!isset($_SESSION['correo'])){ 
  ?>
    <div id="formLogin" class="container">      
      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus Datos</h2>
        
<label for="correo" class="sr-only">correo</label>
                <input type="email" id="correo" class="form-control" placeholder="correo" required="" autofocus=""
                value="<?php if (isset($_COOKIE['correo'])) {
                                  echo $_COOKIE['correo'];
                                } ?>">
                <label for="clave" class="sr-only">clave</label>
                <input type="text" id="clave" class="form-control" placeholder="clave" required="" autofocus=""
                value="<?php if (isset($_COOKIE['pass'])) {
                                  echo $_COOKIE['pass'];
                                } ?>">   
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted '".$_SESSION['correo']."' esta logeado. </h3>";
  ?>         
    
    <button onclick="Mostrar('desloguear')" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Desloguear</button>
    <button onclick="EditarUsuario()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Mi Perfil</button>
  <?php  }  ?>
    
  
