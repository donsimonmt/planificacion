<?php
		@session_start();
	if (!session_is_registered('login') && empty($_SESSION['login']))
	{
		header ("Location: index.php");
	}

?>

	<section id="login" class="container">
		<div id="titulo"><h2>Control de Coordinador</h2></div>
		<div  class="container col-md-12 col-sm-12 well"><br>
		<form class="form-horizontal">
			
						<div class="form-group">
					<label for="Cedula"class="control-label col-md-4 col-sm-4 col-xs-7">Cedula</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="ced_coordinador" name="ced_coordinador" maxlength="8"  onkeypress="return SoloNumeros(event);" onchange="buscaCoordinador();"    
					autofocus required>
				</div>
			</div>

			
			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Nombre</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="nom_coordinador" name="nom_coordinador"  required onkeypress="return soloLetras(event);">
				</div>
			</div>

			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Apellido</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="apel_coordinador" name="apel_coordinador"  required onkeypress="return soloLetras(event);">
				</div>
			</div>		
  
				<div class="form-group">
					<label for="Departamento"class="control-label col-md-4 col-sm-4 col-xs-7">Departamento</label>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<select class="form-control" name="" id="dep_coordinador">
							<option value="-1"></option>
							
						</select>
					</div>
				</div>
  			
  			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Usuario</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="usu_coordinador" name="usu_coordinador"  required>
				</div>
			</div>   

  			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Constraseña</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="password" id="cons_coordinador" name="cons_coordinador"  required>
				</div>
			</div> 

				<div class="form-group">
					<label for="Tipo"class="control-label col-md-4 col-sm-4 col-xs-7">Tipo</label>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<select class="form-control" name="" id="tipo_coordinador">
							<option value="-1"><label for="1">Seleccionar</label></option>
							<option value="1"><label for="1">Administrador</label></option>
							<option value="2"><label for="2">Coordinador</label></option>
						</select>
					</div>
				</div>


			<div class="form-group">
				<div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-4 ">
				
					<button type="button" id="enviar" onClick="registraCoordinador();"  class="btn btn-primary" value="Registrar">
							<span class="glyphicon glyphicon-floppy-disk"></span> Registrar
				    </button>
				    
				    <button type="button" id="modificar" onClick="modificar_coord();" disabled="true" class="btn btn-primary" value="Modificar">
				    		<span class="glyphicon glyphicon-edit"></span> Modificar
				    </button>
				    
				    <a href="#" onclick="call_view('Vista/lista_salon.php')"><input type="button" id="listar"  class="btn btn-primary" value="Listar"></a>
				    
				    <button type="button" id="cancelar" onClick="cancelar_coord();" class="btn btn-danger" value="Cancelar"> 
				    		<span class="glyphicon glyphicon-remove"></span> Cancelar 
				    </button>

			   </div>
					</div>	
						
		</form>
</div>

	</section>

<style>
	footer{
		display: none;
	}
</style>

<script>
	busca_departamento();
</script>