<?php 
	require_once("clases/AccesoDatos.php");
	require_once("clases/usuario.php");
	$arrayDeUsuario=usuario::TraerTodoLosUsuarios();

 ?>
<?php

session_start();
if(isset($_SESSION['correo'])){  ?>

<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<?php

if($_SESSION['tipo']=="admin"){ echo "<th>Borrar</th>";} ?><th>Foto</th><th>Nombre</th><th>Correo</th><th>Clave</th>
		</tr>
	</thead>
	<tbody>

		<?php 
//echo var_dump($arrayDeUsuario);
foreach ($arrayDeUsuario as $usuario) {
	echo "<tr>";
	if($_SESSION['tipo']=="admin")
	{
		echo "<td><a onclick='BorrarUsuario($usuario->id)' class='btn btn-danger'><span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>";
	}
	echo "	<td><img  class='fotoGrilla' src='fotos/".$usuario->foto."'/></td>
			<td>$usuario->nombre</td>
			<td>$usuario->correo</td>
			<td>$usuario->clave</td>
		</tr>";
}
		 ?>
	</tbody>
</table>


  <?php }else{ echo "<h3>Usted no esta logeado. </h3>"; }

  ?>