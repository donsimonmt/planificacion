<?php 
@session_start();

class departamento{

	function registrar($cod_dep,$nom_dep){

		include_once("../conexion.php");
		$sql="INSERT INTO departamento VALUES('$cod_dep','$nom_dep')";		
		$resultado=pg_query($conexion,$sql);	
		if(pg_affected_rows($resultado)>0) return 1;
		else return 0;
	}

	function busca_departamento(){
		include_once("../conexion.php");
		$sql="select * from departamento where codigo_departamento!='10' order by codigo_departamento";
		$resultado=pg_query($conexion,$sql);	
		$esp=@pg_fetch_all($resultado);
		if($esp[0]['codigo_departamento']) return $esp;
		else return 0;
	}
}

 ?>