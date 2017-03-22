function registrarDep(){

	AjaxRequest.get(
     {
     'parameters':{
     	'cod_dep':$('#cod_dep').val(),
     	'nom_dep':$('#nom_dep').val(),
     	'accion':'registrarDep'
     }         
     ,'onSuccess':function(req){
				if(req.responseText==1)
    			{
	 				alert("Datos Guardados satisfactoriamente."); 
					
	 					
				}else alert("error en el registro");
			}
			,'url':'controlador/departamento.php'
			,'onError': function(req){
					alert('HA OCURRIDO UN ERROR INTERNO INESPERADO');
				}
     }
	)
}

function busca_departamento()
{
	AjaxRequest.get
				(	
			 		{
						'parameters':
						{ 
						 "accion":"buscar_departamento"
						}
						,'onSuccess':mostrar_resuldep
						,'url':'Controlador/departamento.php'
						,'onError':function(req)
						{ 
							alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
						}
					}
			   );
}

function mostrar_resuldep(req)
 {
   var respuesta=req.responseText;
   var resultado=eval("("+respuesta+")");
    var combo_departamento = document.getElementById('dep_coordinador');
		combo_departamento.options.length=0;
	var text_departamento = document.createTextNode("Seleccionar");
	var opcion = document.createElement('option');
	opcion.setAttribute('value', -1);
	opcion.appendChild(text_departamento);
	combo_departamento.appendChild(opcion);
	
	for (var i=0; i<resultado.length; i++)
	{
		text_departamento = document.createTextNode(resultado[i]['nombre_departamento']);
		opcion = document.createElement('option');
		opcion.setAttribute('value',resultado[i]['codigo_departamento']);
		opcion.appendChild(text_departamento);
		combo_departamento.appendChild(opcion);
	}
}


