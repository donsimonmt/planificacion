function RegistrarAsig(){
  
  AjaxRequest.post
  ({
  		'parameters':{
  			'dep_coordinador':$('#dep_coordinador').val(),
  			'mod_salon':$('#mod_salon').val(),
  			'sal_pla':$('#sal_pla').val(),
  			'accion':'registraAsignacion'
  		}
  		,'onSuccess':function(req){
  			if (req.responseText==1) {
  				alert("Datos Guardados satisfactoriamente.");
          ver_asignacion();
          cancelarAsig();
  				
  			}else alert("Error en el Registro.");
  		}
  		,'url':'controlador/asignar_espacio.php'
  		,'onError':function(req){
  			alert("HA OCURRIDO UN ERROR INTERNO INESPERADO");
  		}
  });
}


function ver_asignacion(){
 $.ajax({
      type:'GET',
      url:'controlador/asignar_espacio.php',
      data:{'accion':'ver_asignacion'},
      success:function(data){
        $('tbody').html(data);
      }
  });
}

function EliminaAsig(srt){
  var Codi_depa=srt;
  AjaxRequest.get({
      'parameters':{
          'Codi_depa':Codi_depa,
          'accion':'EliminarAsig'
      }
      ,'onSuccess':function(data){
          ver_asignacion();
      }
      ,'url':'controlador/asignar_espacio.php'
      ,'onError':function(data){
          alert("HA OCURRIDO UN ERROR INTERNO INESPERADO")
      }
  });
}
function cancelarAsig(){
  $('#dep_coordinador','#mod_salon','#sal_pla').val(-1)

}