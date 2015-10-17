<?php 
	session_start();

		$_SESSION['correo']=null;
		$_SESSION['pass']=null;
		$_SESSION['tipo']=null;

	session_destroy();
 ?>