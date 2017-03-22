<?php
		@session_start();
	if (!session_is_registered('login') && empty($_SESSION['login']))
	{
		header ("Location: index.php");
	}

?>

	<section id="login" class="container">
		<div id="titulo"><h2>Administrar Salón</h2></div>
		<div  class="container col-md-12 col-sm-12 well"><br>
		<form class="form-horizontal">
			
						<div class="form-group">
					<label for="Cedula"class="control-label col-md-4 col-sm-4 col-xs-7">Codigo del Salón</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="cod_salon" name="codigo" maxlength="8"    
					autofocus required>
				</div>
			</div>

			
			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Nombre del Salón</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="nom_salon" name="nombre"  required>
				</div>
			</div>

			<div class="form-group">
					<label for="Modulo" class="control-label col-md-4 col-sm-4 col-xs-7">Módulo</label>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<select class="form-control" name="" id="mod_salon">
							<option value="-1"></option>
							
						</select>
					</div>
				</div>

			<div class="form-group">
					<label for="tipo"class="control-label col-md-4 col-sm-4 col-xs-7">Tipo</label>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<select class="form-control" name="tipo_salon" id="tipo_salon">
							<option value="-1"><label for="1">Seleccionar</label></option>
							<option value="1"><label for="1">Corriente</label></option>
							<option value="2"><label for="2">Laboratorio</label></option>
						</select>
					</div>
				</div>

			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Capacidad</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="cap_salon" name="nombre"  required>
				</div>
			</div>			
                      			

			<div class="form-group">
				<div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-4 ">
					<button type="button" id="enviar" onClick="registraSalon();"  class="btn btn-primary" value="Registrar">
							<span class="glyphicon glyphicon-floppy-disk"></span> Registrar
				    </button>

				    <button type="button" id="modificar" onClick="validarFormulario_salon(2);" disabled="true" class="btn btn-primary" value="Modificar">
				    		<span class="glyphicon glyphicon-edit"></span> Modificar
				    </button>
				    <a href="#" onclick="call_view('Vista/lista_salon.php')"><input type="button" id="listar"  class="btn btn-primary" value="Listar"></a>
				    
				    <button type="button" id="cancelar" onClick="CancelaSalon();" class="btn btn-danger" value="Cancelar"> 
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
<script type="text/javascript">
	BuscaMod();
</script>