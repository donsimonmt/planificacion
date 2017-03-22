<?php
@session_start();
class Operador
{

	function __construct($ced_coordinador){
		$this->ced_coordinador=$ced_coordinador;
		$this->conexion = pg_connect("host=localhost port=5432 dbname=pnf user=postgres password=admin");
	}
	
	function Buscar($usuario,$clave)
	{
		include_once('../conexion.php');
		$Consulta="SELECT A.*,B.nombre_departamento FROM coordinador As A INNER JOIN departamento As B ON A.codigo_departamento=B.codigo_departamento
					WHERE   clave='$clave' and login='$usuario'";
		$resultado=pg_query($conexion,$Consulta);	
		$Datos=@pg_fetch_all($resultado);//Devuelve los datos en forma de arreglo
		if($Datos[0]['login'])//verificar si arrojo algun resultado
			return $Datos;
		else
			return 0;		
	}

	function registrar($ced_coordinador,$nom_coordinador,$apel_coordinador,$dep_coordinador,$usu_coordinador,$cons_coordinador,$tipo_coordinador){
		
		$Consulta = "insert into coordinador (cedula_coordinador,codigo_departamento,nombre_coordinador,apellido_coordinador,login,clave,tipo) values ('$ced_coordinador','$dep_coordinador','$nom_coordinador','$apel_coordinador','$usu_coordinador','$cons_coordinador','$tipo_coordinador')";
		$resultado=pg_query($this->conexion,$Consulta);	
		if(pg_affected_rows($resultado)>0) return 1;
		else return 0;

	}


	function busca(){
		
		$Consulta = "select * from coordinador where cedula_coordinador='$this->ced_coordinador'";
		$resultado=pg_query($this->conexion,$Consulta);	
		$Datos=@pg_fetch_all($resultado);//Devuelve los datos en forma de arreglo
		if($Datos[0]['cedula_coordinador'])//verificar si arrojo algun resultado
			return $Datos;
		else
			return 0;

	}	

	function modificar($nom_coordinador,$apel_coordinador,$dep_coordinador,$Usu_coordinador,$cons_coordinador,$Tipo_coordinador){

		include_once("../conexion.php");
		$Consulta="update coordinador set login='$Usu_coordinador', clave='$cons_coordinador',
						tipo='$Tipo_coordinador', nombre_coordinador='$nom_coordinador',
				 		apellido_coordinador='$apel_coordinador', codigo_departamento='$dep_coordinador' 
				  where cedula_coordinador='$this->ced_coordinador'"; 

		$resultado=pg_query($conexion,$Consulta);
		if (pg_affected_rows($resultado)>0)
			/*$tipo=$this->busca();
			if ($_SESSION['ced_coordinador']==$tipo[0]['cedula_coordinador']) {
				$_SESSION['tipo_coordinador']=$Tipo_coordinador;
			}*/
			return 1;
		 
		else return 0;
	}

}
?>