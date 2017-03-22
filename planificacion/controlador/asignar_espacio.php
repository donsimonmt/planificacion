<?php 
  include_once('../modelo/ClaseAsignar.php');
  include_once('../json.php');
  foreach($_GET as $NombreCampo => $Valor) {
	$Asignacion = "\$".$NombreCampo."='".$Valor."';";
	eval($Asignacion);
  }
  $json=new Services_JSON();
  	switch ($accion) {
  		case 'registraAsignacion':
  			$asignar= new Asignar();
  			echo $asignar->registraAsignacion($dep_coordinador,$mod_salon,$sal_pla);
  		break;
      case 'ver_asignacion':
        $asignar=new Asignar();
        $Salida=$asignar->ver_asignacion();
      break;
      case 'EliminarAsig':
        $asignar=new Asignar();
        $Salida=$asignar->EliminarAsig($Codi_depa);        
      break;
  	}

?>