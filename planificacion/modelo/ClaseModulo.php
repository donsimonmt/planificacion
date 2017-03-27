<?php 
@session_start();
class modulo{

	function RegistrarMod($cod_mod,$nom_mod,$cap_mod){
		include_once('../conexion.php');
		$sql="INSERT INTO modulo(codigo_modulo, nombre_modulo, cantidad_salon_modulo)
   						 VALUES ('$cod_mod','$nom_mod','$cap_mod')";
		$resultado=pg_query($conexion,$sql);
		if (pg_affected_rows($resultado)>0) return 1; 
		else return 0;		
	}

	function buscaModulo($cod_mod){		
		include_once('../conexion.php');
		$Consulta = "select * from modulo where codigo_modulo='$cod_mod'";
		$resultado=pg_query($conexion,$Consulta);	
		$Datos=@pg_fetch_all($resultado);//Devuelve los datos en forma de arreglo
		if($Datos[0]['codigo_modulo'])//verificar si arrojo algun resultado
			return $Datos;
		else
			return 0;
	}	

	function BuscaMod(){
		include_once("../conexion.php");
		if ($_SESSION['tipo_coordinador']==1) {
			$sql="select * from modulo order by nombre_modulo";
			$resultado=pg_query($conexion,$sql);
			$esp=@pg_fetch_all($resultado);
			if($esp[0]['codigo_modulo']) return $esp;
			else return 0;
		}else{
			$sql="select modulo.codigo_modulo,nombre_modulo from asignar, modulo, departamento where 
			asignar.codigo_departamento=departamento.codigo_departamento and asignar.codigo_modulo=modulo.codigo_modulo 
			and departamento.codigo_departamento='".$_SESSION['cod_dep']."' group by nombre_modulo,modulo.codigo_modulo 
			order by nombre_modulo";
			$resultado=pg_query($conexion,$sql);
			$esp=@pg_fetch_all($resultado);
			if($esp[0]['codigo_modulo']) return $esp;
			else return 0;
		}
	}
}
?>
