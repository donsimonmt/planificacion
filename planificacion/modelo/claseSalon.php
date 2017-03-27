<?php 
@session_start();


class SALON{


	public function registrar($cod_salon,$nom_salon,$mod_salon,$cap_salon,$tipo_salon){
		include_once ("../conexion.php");
		$sql="insert into salon (codigo_salon,codigo_modulo,nombre_salon,capacidad_salon,tipo_salon)  
					      values('$cod_salon','$mod_salon','$nom_salon','$cap_salon','$tipo_salon')";	
		$resultado=pg_query($conexion,$sql);	
		if(pg_affected_rows($resultado)>0) return 1;
		else return 0; 
	}

	function BuscaSalon($cod_salon){
		include_once("../conexion.php");
		$sql="SELECT * FROM salon WHERE codigo_salon='$cod_salon'";		
		$respuesta=pg_query($conexion,$sql);
		$esp=@pg_fetch_all($respuesta);
		  if ($esp[0]['codigo_salon']) return $esp;
		  else return 0;
	}
}

 ?>
