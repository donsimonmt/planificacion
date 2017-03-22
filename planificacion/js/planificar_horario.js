function buscarSalon(){

	AjaxRequest.get(
		{
			'parameters':{'mod_salon':$("#mod_salon").val(),
				'accion':'buscaSalon'
			}
			,'onSuccess':function(req){
				var respuesta = req.responseText;
				var resultado = eval("("+respuesta+")");
				var ComboMod  = document.getElementById('sal_pla');	
					ComboMod.options.length=0;
				var TextMod=document.createTextNode('Seleccionar');
				var opcion= document.createElement('option');
					opcion.setAttribute('value', -1);
					opcion.appendChild(TextMod);
					ComboMod.appendChild(opcion);

					for (var i = 0; i < resultado.length; i++) {
						TextMod=document.createTextNode(resultado[i]['nombre_salon']);
						opcion = document.createElement('option');
						opcion.setAttribute('value', resultado[i]['codigo_salon']);
						opcion.appendChild(TextMod);
						ComboMod.appendChild(opcion);
					}
			}		
			,'url':'controlador/planificar_horario.php'
			,'onError':function(req){
				alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
			}
		}
	)

}