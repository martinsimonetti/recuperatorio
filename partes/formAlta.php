
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">
 

    <div class="container">

      <form  id="FormIngreso" method="post" class="form-ingreso" onsubmit="GuardarUsuario(); return false;" enctype="multipart/form-data">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <label for="nombre" class="sr-only" hidden>nombre</label>
                <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="correo" class="sr-only" hidden>correo</label>
                <input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" required="" autofocus="">
        <label for="clave" class="sr-only" hidden>clave</label>
                <input name="clave" type="password" id="clave" class="form-control" placeholder="Clave" required="" autofocus="">
        <label for="tipo" class="sr-only" hidden>tipo</label>
          <select name="tipo" id="tipo" class="form-control">
            <option value="admin">admin</option>
            <option value="user">user</option>
          </select><br>
        <div id="divFoto">
          <input type="file" name="foto" id="file"/>
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
        <input type="hidden" name="id" id="id" readonly>
      </form>
    </div> <!-- /container -->

    
  
