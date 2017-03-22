<?php 
@session_start();

CLASS Asignar{
	function __construct(){
		$this->conexion = pg_connect("host=localhost port=5432 dbname=pnf user=postgres password=1234");
	}

	function registraAsignacion($dep_coordinador,$mod_salon,$sal_pla){
		
		$sql="INSERT INTO asignar VALUES ('$dep_coordinador','$mod_salon','$sal_pla')";
		$resultado=pg_query($this->conexion,$sql);
		if(pg_affected_rows($resultado)>0)return 1;
		else return 0;
	}

	function ver_asignacion(){
		if ($_SESSION['cod_dep']==10) {
		$sql="select A.*,B.nombre_departamento,C.nombre_modulo,D.nombre_salon from asignar as A 
		inner join departamento as B on A.codigo_departamento=B.codigo_departamento 
		inner join modulo as C on A.codigo_modulo=C.codigo_modulo 
		inner join salon as D on A.codigo_salon=D.codigo_salon order by nombre_modulo ";
      	$query=pg_query($this->conexion, $sql);
      		while ($row=pg_fetch_assoc($query)) {     		
      			?>	<tr>
      					<td><?php echo $row["nombre_departamento"]?></td>
      					<td><?php echo $row['nombre_modulo']?></td>
      					<td><?php echo $row['nombre_salon']?></td>
      					<td><!--<a href="javascript:void(0);" class="glyphicon glyphicon-edit"></a>  -->
                    		<a href="javascript:void(0);" onclick="EliminaAsig(<?php echo $row['id_asignar'];?>);" class="glyphicon glyphicon-trash"></a>
                    		</td>
      				</tr>;
      			<?php			     		
      		}
		}else{
		$sql="select A.*,B.nombre_departamento,C.nombre_modulo,D.nombre_salon from asignar as A 
		inner join departamento as B on A.codigo_departamento=B.codigo_departamento 
		inner join modulo as C on A.codigo_modulo=C.codigo_modulo 
		inner join salon as D on A.codigo_salon=D.codigo_salon where B.codigo_departamento='".$_SESSION['cod_dep']."' order by nombre_modulo ";
      	$query=pg_query($this->conexion, $sql);
      		while ($row=pg_fetch_assoc($query)) {     		
      			?>	<tr>
      					<td><?php echo $row["nombre_departamento"]?></td>
      					<td><?php echo $row['nombre_modulo']?></td>
      					<td><?php echo $row['nombre_salon']?></td>
      					<td>
                     <!-- <a href="javascript:void(0);" class="glyphicon glyphicon-edit"></a>  -->
                    	<a href="javascript:void(0);" onclick="EliminaAsig(<?php echo $row['id_asignar'];?>);" class="glyphicon glyphicon-trash"></a>
                </td>
      				</tr>;
      			<?php			     		
      		}
      	}	       
	}

  function EliminarAsig($Codi_depa){
    $sql="DELETE FROM asignar WHERE id_asignar='$Codi_depa'";
    $query=pg_query($this->conexion,$sql);
  }
}

 ?>