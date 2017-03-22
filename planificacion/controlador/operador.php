<?php
	include_once("../modelo/ClaseOperador.php");
	include_once("../json.php");
	foreach($_GET as $NombreCampo => $Valor){
		$Asignacion = "\$".$NombreCampo."='".$Valor."';";
		//echo $Asignacion;
		eval($Asignacion);

	}
	
	$json=new Services_JSON();
	switch($accion){
		case 'IniciandoSesion':
			$Operador=new Operador("");
			$Salida=$Operador->Buscar($usuario,$clave);
			if(!is_array($Salida)) echo $json->encode(0);
			else echo $json->encode($Salida);
		break;
		
		case 'RegistrandoSesion':
			@session_start();
			$Salida=session_register('login','cons_coordinador','ced_coordinador','nom_cooordinador','apel_coordinador','tipo_coordinador','cod_dep','nomb_dep');
			$_SESSION['login']=$login;
			$_SESSION['cons_coordinador']=$cons_coordinador;
			$_SESSION['ced_coordinador']=$ced_coordinador;
			$_SESSION['nom_cooordinador']=$nom_cooordinador;
			$_SESSION['apel_coordinador']=$apel_coordinador;
			$_SESSION['tipo_coordinador']=$tipo_coordinador;
			$_SESSION['cod_dep']=$cod_dep;
			$_SESSION['nomb_dep']=$nomb_dep;
			$_SESSION['nombre_usuario']	= $nom_coordinador." ".$apel_coordinador;
			echo $Salida;
		break;
		
		case 'CerrandoSesion':
			@session_start(); 
			echo session_destroy();
		break;

		case 'registraCoordinador':
				$Operador = new Operador ("","","","","","","");
  			echo $Operador->registrar($ced_coordinador,$nom_coordinador,$apel_coordinador,$dep_coordinador,$Usu_coordinador,$cons_coordinador,$Tipo_coordinador);
  		break;

		case 'BuscaCoordinador':
			$Operador=new Operador($ced_coordinador,"","","","","");
			$Salida=$Operador->busca();
			if(!is_array($Salida)) echo $json->encode(0);
			else echo $json->encode($Salida);
		break;
		
		case 'modificarCoordinador':
			$Operador = new Operador ($ced_coordinador,"","","","","","");
  			echo $Operador->modificar($nom_coordinador,$apel_coordinador,$dep_coordinador,$Usu_coordinador,$cons_coordinador,$Tipo_coordinador);
		break;	
		
	}
?>