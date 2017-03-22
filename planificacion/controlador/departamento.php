<?php
  include_once("../modelo/claseDepartamento.php");
  include_once("../json.php");
  foreach($_REQUEST as $NombreCampo => $Valor){
    $Asignacion = "\$".$NombreCampo."='".$Valor."';";
    eval($Asignacion);
  }
  $json=new Services_JSON();
  switch($accion){
  	case 'registrarDep':
  		$departamento= new departamento();
  		echo $departamento->registrar($cod_dep,$nom_dep);
  	break;
    
    case'buscar_departamento':
      $departamento= new departamento();
      $respuesta=$departamento->busca_departamento();
        if(!is_array($respuesta)) $resp=$json->encode(0);
        else $resp=$json->encode($respuesta);
        echo $resp;
    break;
  }
?>