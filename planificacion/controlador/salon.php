<?php
  include_once("../modelo/claseSalon.php");
  include_once("../json.php");
  foreach($_REQUEST as $NombreCampo => $Valor){
    $Asignacion = "\$".$NombreCampo."='".$Valor."';";
    eval($Asignacion);
  }
  $json=new Services_JSON();
  switch($accion){
  	case 'registraSalon':
  		$salon= new SALON();
  		echo $salon->registrar($cod_salon,$nom_salon,$mod_salon,$cap_salon,$tipo_salon);
  	break;
  }
?>