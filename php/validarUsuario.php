<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$correo=$_POST['correo'];
	$clave=$_POST['clave'];

	$unUsuario = usuario::ValidarUsuario($correo,$clave);
		
	//echo var_dump($unUsuario);

	if($unUsuario)
	{
		setcookie("correo",$unUsuario->correo,  time()+48600, "/");
		setcookie("clave",$unUsuario->clave,  time()+48600, "/");
		session_start();
		$_SESSION['correo'] = $unUsuario->correo;
		$_SESSION['pass'] = $unUsuario->clave;
		$_SESSION['tipo'] = $unUsuario->tipo;
		echo "Usuario: ".$_COOKIE['correo']."<br>Clave: ".$_COOKIE['clave'];
	}
	else
	{
		echo "error";		
	}
?>