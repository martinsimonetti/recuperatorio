
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">
 

    <div class="container">

      <form  class="form-ingreso " onsubmit="GuardarUsuario(); return false;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <label for="nombre" class="sr-only" hidden>nombre</label>
                <input type="text" id="nombre" class="form-control" placeholder="nombre" required="" autofocus="">
        <label for="correo" class="sr-only" hidden>correo</label>
                <input type="email" id="correo" class="form-control" placeholder="correo" required="" autofocus="">
        <label for="clave" class="sr-only" hidden>clave</label>
                <input type="password" id="clave" class="form-control" placeholder="clave" required="" autofocus="">
                <label for="tipo" class="sr-only" hidden>tipo</label>
                <select name="tipo" id="tipo" class="form-control">
                  <option value="admin">admin</option>
                  <option value="user">user</option>
                </select><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
        <input type="hidden" name="id" id="id" readonly>
      </form>
    </div> <!-- /container -->

    
  
