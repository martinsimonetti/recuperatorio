<?php
class usuario
{
	public $id;
 	public $nombre;
  	public $correo;
  	public $clave;
  	public $tipo;

 public static function ValidarUsuario($correo, $clave) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios WHERE correo=:correo AND clave=:clave");
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnusuario($id)");
			$consulta->bindValue(':correo',$correo, PDO::PARAM_STR);
			$consulta->bindValue(':clave',$clave, PDO::PARAM_STR);
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('usuario');
			return $usuarioBuscado;			
	}

public function GuardarUsuario()
	 {
	 	if($this->id>0)
	 		{
	 			$this->ModificarUsuario();
	 		}else {
	 			$this->InsertarUsuario();
	 		}
	 }

	 public function InsertarUsuario()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO usuarios(nombre,clave,correo,tipo) VALUES('$this->nombre','$this->clave','$this->correo','$this->tipo')");
				//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Insertarusuario('$this->nombre','$this->clave','$this->correo','$this->sexo')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	 public static function TraerTodoLosUsuarios()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuarios");
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodoLosusuarios");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");		
	}
  	
  	public function BorrarUsuario()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("delete from usuarios WHERE id=:id");	
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Borrarusuario(:id)");		
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	 public static function TraerUnUsuario($correo, $clave) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuarios where correo = $correo AND clave=$clave");
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnusuario($id)");
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('usuario');
			return $usuarioBuscado;				

			
	}

	public function ModificarUsuario()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				UPDATE usuarios 
				SET nombre=:nombre
				WHERE id=:id");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Modificarusuario('$this->id','$this->clave','$this->correo','$this->sexo')");
			return $consulta->execute();

	 }
}
?>