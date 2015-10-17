<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$correo=$_POST['correo'];
	$clave=$_POST['clave'];

	$unUsuario = usuario::ValidarUsuario($correo,$clave);
	$tipo=$unUsuario->tipo;
	//echo var_dump($unUsuario);

	if(isset($unUsuario))
	{
		setcookie("correo",$correo,  time()+36000 , '/');
		setcookie("pass",$clave,  time()-36000 , '/');
		session_start();
		$_SESSION['correo'] = $correo;
		$_SESSION['pass'] = $clave;
		$_SESSION['tipo'] = $tipo;
		echo "ok";
	}
	else
	{
		echo "error";		
	}
?>