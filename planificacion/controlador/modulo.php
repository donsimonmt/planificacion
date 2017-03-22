<?php 
include_once("../modelo/ClaseModulo.php");
include_once("../json.php");
foreach ($_REQUEST as $NombreCampo => $Valor) {
	$Asignacion="\$".NombreCampo."='".$Valor."';";
	eval($Asignacion);
}
	$json=new Services_JSON();
 		switch ($accion) {
 			case 'RegistrarMod':
 				$modulo= new modulo();
 				echo $modulo->RegistrarMod($cod_mod,$nom_mod,$cap_mod); 				
 			break; 		
 			case 'BuscaMod':
 				$modulo=new modulo();
 				$respuesta=$modulo->BuscaMod();
        		if(!is_array($respuesta)) $resp=$json->encode(0);
       		 	else $resp=$json->encode($respuesta);
        		echo $resp;
 			break;

 		}

 ?>