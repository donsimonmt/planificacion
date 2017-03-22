<?php 
@session_start();
class planificar{


	function BuscaSalon($mod_salon){
		include_once("../conexion.php");
		$sql="select * from salon where codigo_modulo='$mod_salon'";
		$resultado=pg_query($conexion,$sql);
		$esp=@pg_fetch_all($resultado);
		if($esp[0]['codigo_salon']) return $esp;
		else return 0;
	}
}
?>