function validarLogin()
{
	//alert("Login");
	var correo=$("#correo").val();
	var clave=$("#clave").val();
	//alert(correo+clave);

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			correo:correo,
			clave:clave
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		if (retorno!="error") {
			//alert(retorno);
			$("#Contador").html(retorno);
			Mostrar('MostarLogin');	
		}
		else{
			alert("Usuario o clave incorecta.")
		}
		
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);	
	});
	
}
function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
		MostarLogin();			
	});	
}
