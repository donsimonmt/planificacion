
function registraSalon(){
	var campo=new Array("cod_salon","nom_salon","mod_salon","tipo_salon","cap_salon");
	var resultado=new Array("Código del Salón","Nombre del Salón","Edificio","Tipo del Salón ","Capacidad del Salón");
	var error="";
	for(var i=0;i<campo.length;i++)
	{
		if($('#'+campo[i]).prop('disabled')==false){
			if($("#"+campo[i]).val()=="" || $("#"+campo[i]).val()=="-1") error=error+"-"+resultado[i]+"\n";
		}
	}
	if (error==""){
		AjaxRequest.get
		({
				'parameters':{
					'cod_salon':$('#cod_salon').val(),
					'nom_salon':$('#nom_salon').val(),
					'mod_salon':$('#mod_salon').val(),
					'tipo_salon':$('#tipo_salon').val(),
					'cap_salon':$('#cap_salon').val(),
					'accion':'registraSalon'
				}
				,'onSuccess':function(req){
					if(req.responseText==1){  
    					toastr.success('Datos Guardados satisfactoriamente.', 'Alerta', {timeOut: 3000});
						CancelaSalon();	 					
					}else toastr.error('Error en el Registro.', 'Alarma de Error', {timeOut: 3000});
					//alert("error en el registro");
				}
				,'url':'controlador/salon.php'
				,'onError': function(resp){
						alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
					}	
		})
	}else alert("Error de validaci\u00f3n, complete los siguentes campos: \n"+error);
}

function BuscaSalon(){
	AjaxRequest.get({
		'parameters':{
			'cod_salon':$('#cod_salon').val(),
			'accion':'BuscaSalon'
		}
		,'onSuccess':function(req){	
			var resultado=req.responseText;
   			var dato=eval("("+resultado+")");
   				if(resultado!=0){	
   					$('#enviar').prop('disabled',true),	
   					$('#modificar').prop('disabled',false),	
   					$('#cod_salon').prop('disabled',false),			
					$("#nom_salon").val(dato[0]['nombre_salon']);				
					$("#mod_salon").val(dato[0]['codigo_modulo']);				
					$("#tipo_salon").val(dato[0]['tipo_salon']);				
					$("#cap_salon").val(dato[0]['capacidad_salon']);				
				}else alert("error");

		}
		,'url':'controlador/salon.php'
		,'onError':function(req){
			alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
		}
	})
}
	
function CancelaSalon(){
	$('#cod_salon').focus()
	$('#cod_salon,#cap_salon,#nom_salon').val(''),	
	$('#mod_salon,#tipo_salon').val(-1),
	$('#enviar').prop('disabled',false)
}
