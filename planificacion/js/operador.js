// JavaScript Document2
function VerificarTecla(Evento) // Iniciar Sesion al presionar ENTER
{
	tecla = (document.all) ? Evento.keyCode : Evento.which;
	if (tecla==13) IniciarSesion();

}

function IniciarSesion()
{
 var usuario=document.getElementById('Usuario').value;
 var clave=document.getElementById('Clave').value;

  AjaxRequest.get
  (
		 {'parameters':
		   {
		    'usuario':usuario,
		    'clave':clave,
			'accion':"IniciandoSesion"
		   },
		'onSuccess':VerificarInicioSesion,
		'url':"controlador/operador.php",
		'onError':function(req){alert('ERROR!\nStatusText='+req.statusText+'\nContens='+req.responseText);}
		}
   );
}

function VerificarInicioSesion(req)
{
	var resultado=req.responseText;//trae el resultado de la bd
    var dato=eval("("+resultado+")");
	
	if(resultado!=0)
	{		
		AjaxRequest.get
		({'parameters':
		 {
		 	 
			 'login':dato[0]['login'],
			 'cons_coordinador':dato[0]['cons_coordinador'],
			 'ced_coordinador':dato[0]['cedula_coordinador'],
			 'nom_coordinador':dato[0]['nombre_coordinador'],
			 'apel_coordinador':dato[0]['apellido_coordinador'],
			 'tipo_coordinador':dato[0]['tipo'],
			 'cod_dep':dato[0]['codigo_departamento'],
			 'nomb_dep':dato[0]['nombre_departamento'],
			 'accion':"RegistrandoSesion"
		},
		'onSuccess':VerificarRegistroSesion,
		'url':"controlador/operador.php",
		'onError':function(req){alert('ERROR!\nStatusText='+req.statusText+'\nContens='+req.responseText);}
		});
	}
	else
	if(req.responseText==0)
	{
		alert("Operador No Registrado o cuenta Deshabilitada!");	
		document.getElementById('Clave').value="";
	}
}
function VerificarRegistroSesion(req)
{
	var Resultado=eval("("+ req.responseText +")");
	if(Resultado==1)
	{
		document.location.href="index_admin.php";
	}
}
function CerrarSesion()
{
	var r = confirm("Seguro que desea salir");
	if (r==true) {

		AjaxRequest.get
		(
		 {'parameters':{'accion':"CerrandoSesion"},
		'onSuccess':VerificarCerrarSesion,
		'url':"controlador/operador.php",
		'onError':function(req){alert('ERROR!\nStatusText='+req.statusText+'\nContens='+req.responseText);}
		});

	};
}
function VerificarCerrarSesion(req)
{
	var Resultado=eval("("+ req.responseText +")");
	if(Resultado==1)
	{
		document.location="index.php";
	}
}



function registraCoordinador(){

	AjaxRequest.get
	(
		{
			'parameters':{
				'ced_coordinador':$('#ced_coordinador').val(),
				'nom_coordinador':$('#nom_coordinador').val(),
				'apel_coordinador':$('#apel_coordinador').val(),
				'dep_coordinador':$('#dep_coordinador').val(),
				'Usu_coordinador':$('#usu_coordinador').val(),
				'cons_coordinador':$('#cons_coordinador').val(),
				'Tipo_coordinador':$('#tipo_coordinador').val(),
				'accion':'registraCoordinador'
			}
			,'onSuccess':function(req){
				if(req.responseText==1)
    			{
	 				alert("Datos Guardados satisfactoriamente."); 
					cancelar_coord();
	 					
				}else alert("error en el registro");
			}
			,'url':'controlador/operador.php'
			,'onError': function(resp){
					alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
				}
	
		}
	)		
}


function buscaCoordinador(){
AjaxRequest.get
	(
		{
			'parameters':{
				'ced_coordinador':$('#ced_coordinador').val(),

					'accion':'BuscaCoordinador'
			}
			,'onSuccess':function(req){
				var resultado=req.responseText;
   var dato=eval("("+resultado+")");

   if(resultado!=0)
    			{	$('#ced_coordinador').prop('disabled',true);
    				$('#enviar').prop('disabled',true);
    				$('#modificar').prop('disabled',false);
    				$('#nom_coordinador').val(dato[0]['nombre_coordinador']);
					$('#apel_coordinador').val(dato[0]['apellido_coordinador']);
					$('#dep_coordinador').val(dato[0]['codigo_departamento']);
					$('#usu_coordinador').val(dato[0]['login']);
					$('#cons_coordinador').val(dato[0]['clave']);
					$('#tipo_coordinador').val(dato[0]['tipo']);
					

	 					
				}else alert("Usuario no registrado");
			}
			,'url':'controlador/operador.php'
			,'onError': function(resp){
					alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
				}
	
		}
	)
}

function cancelar_coord(){
		$('#ced_coordinador').prop('disabled',false);
    	$('#enviar').prop('disabled',false);
    	$('#modificar').prop('disabled',true);
    	$('#nom_coordinador').val('');
    	$('#ced_coordinador').val('');
		$('#apel_coordinador').val('');
		$('#dep_coordinador').val('');
		$('#usu_coordinador').val('');
		$('#cons_coordinador').val('');
		$('#tipo_coordinador').val('');
		

	}

function modificar_coord(){
 
 AjaxRequest.get
 (
    	{
			'parameters':{
				'ced_coordinador':$('#ced_coordinador').val(),
				'nom_coordinador':$('#nom_coordinador').val(),
				'apel_coordinador':$('#apel_coordinador').val(),
				'dep_coordinador':$('#dep_coordinador').val(),
				'Usu_coordinador':$('#usu_coordinador').val(),
				'cons_coordinador':$('#cons_coordinador').val(),
				'Tipo_coordinador':$('#tipo_coordinador').val(),


				'accion':'modificarCoordinador'
			}
			,'onSuccess':function(req){
				if(req.responseText==1)
    			{
	 				alert("Datos Guardados satisfactoriamente."); 
					cancelar_coord();
	 					
				}else alert("error en el registro");
			}
			,'url':'controlador/operador.php'
			,'onError': function(resp){
					alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
				}
	
		}

 )
}