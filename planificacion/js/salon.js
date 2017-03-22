

function registraSalon(){

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
	});
}

function CancelaSalon(){
	$('#cod_salon,#cap_salon,#nom_salon').val(''),	
	$('#mod_salon,#tipo_salon').val(-1),
	$('#enviar').prop('disabled',false)
}