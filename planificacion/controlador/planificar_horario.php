<?php 
include_once("../modelo/clasePlanificarHorario.php");
include_once("../json.php");
foreach ($_REQUEST as $NombreCampo => $Valor) {
	$Asignacion="\$".NombreCampo."='".$Valor."';";
	eval($Asignacion);
}	
$json=new Services_JSON();
	switch ($accion){
 			case 'buscaSalon':
 				$planifica=new planificar();
 				$respuesta=$planifica->BuscaSalon($mod_salon);
        		if(!is_array($respuesta)) $resp=$json->encode(0);
       		 	else $resp=$json->encode($respuesta);
        		echo $resp;
 			break;

 		}

 ?>