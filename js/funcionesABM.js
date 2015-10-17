function BorrarUsuario(idParametro)
{
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUsuario",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("grilla");
		
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);
	});	
}

function EditarUsuario()
{
	Mostrar('alta');
	//alert("correo+clave");
	//Mostrar('alta');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"Editarsuario"
		}
	});

	funcionAjax.done(function(retorno){		
		//alert(retorno);
		var usuario =JSON.parse(retorno);		
		$("#id").val(usuario.id);
		//alert(usuario.id+usuario.nombre+usuario.correo+usuario.clave+usuario.tipo);
		$("#nombre").val(usuario.nombre);
		//alert(usuario.provincia);
		$("#correo").val(usuario.correo);
		$("#correo").attr("readonly",true);
		$("#clave").val(usuario.clave);
		$("#clave").attr("readonly",true);
		$("#tipo").val(usuario.tipo);
		$("#tipo").attr("disabled",true);
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);
	});
}

function GuardarUsuario()
{
	var id=$("#id").val();
	//alert(id);
	var nombre=$("#nombre").val();
	var correo=$("#correo").val();
	var clave=$("#clave").val();
	var tipo=$("#tipo").val();

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"POST",
		data:{
			queHacer:"GuardarUsuario",
			nombre:nombre,
			correo:correo,
			clave:clave,
			id:id,
			tipo:tipo
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostarLogin");	
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});	
}