function RegistraMod(){
	
	AjaxRequest.get
	(
		{

			'parameters':{
				'cod_mod':$('#cod_mod').val(),
				'nom_mod':$('#nom_mod').val(),
				'cap_mod':$('#cap_mod').val(),
				'accion':'RegistrarMod'
			}
		
		  ,'onSuccess':function(req){
			if(req.responseText==1)
    			{
	 				alert("Datos Guardados satisfactoriamente."); 
					
	 					
				}else alert("error en el registro");
			}
	      ,'url':'controlador/modulo.php'
		  ,'onError':function(req){
				alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
			}
		}
	);
}

function CancelaMod(){

	$('#cod_mod').val(''),
	$('#nom_mod').val(''),
	$('#cap_mod').val(''),
	$('#enviar').prop('desibled',true)
}

function BuscaMod(){

	AjaxRequest.get(
		{
			'parameters':{
				'accion':'BuscaMod'
			}
			,'onSuccess':function(req){
				var respuesta = req.responseText;
				var resultado = eval("("+respuesta+")");
				var ComboMod  = document.getElementById('mod_salon');	
					ComboMod.options.length=0;
				var TextMod=document.createTextNode('Seleccionar');
				var opcion= document.createElement('option');
					opcion.setAttribute('value', -1);
					opcion.appendChild(TextMod);
					ComboMod.appendChild(opcion);

					for (var i = 0; i < resultado.length; i++) {
						TextMod=document.createTextNode(resultado[i]['nombre_modulo']);
						opcion = document.createElement('option');
						opcion.setAttribute('value', resultado[i]['codigo_modulo']);
						opcion.appendChild(TextMod);
						ComboMod.appendChild(opcion);
					}
			}		
			,'url':'controlador/modulo.php'
			,'onError':function(req){
				alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
			}
		}
	)
}