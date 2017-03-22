<?php
		@session_start();
	if (!session_is_registered('login') && empty($_SESSION['login']))
	{
		header ("Location: index.php");
	}

?>

	<section id="login" class="container">
		<div id="titulo"><h2>Administrar Modulo</h2></div>
		<div  class="container col-md-12 col-sm-12 well"><br>
		<form class="form-horizontal">
			
						<div class="form-group">
					<label for="Cedula"class="control-label col-md-4 col-sm-4 col-xs-7">Código</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="cod_mod" name="codigo" maxlength="8"    
					autofocus required>
				</div>
			</div>

			
			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Nombre</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="nom_mod" name="nombre"  required>
				</div>
			</div>

			<div class="form-group">
					<label for="Nombre" class="control-label col-md-4 col-sm-4 col-xs-7">Capacidad</label>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<input class="form-control" type="text" id="cap_mod" name="nombre"  required placeholder="Salones" maxlength="2" onkeypress="validarEntradaNumerica(id)" >
				</div>
			</div>

                      		
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-4 ">
					<button type="button" id="enviar" onClick="RegistraMod();"  class="btn btn-primary" value="Registrar">
							<span class="glyphicon glyphicon-floppy-disk"></span> Registrar
				    </button>
				    
				    <button type="button" id="modificar" onClick="validarFormulario_salon(2);" disabled="true" class="btn btn-primary" value="Modificar">
				    		<span class="glyphicon glyphicon-edit"></span> Modificar
				    </button>

				    
				    <a href="#" onclick="call_view('Vista/lista_salon.php')"><input type="button" id="listar"  class="btn btn-primary" value="Listar"></a>
				    
				    <button type="button" id="cancelar" onClick="CancelaMod();" class="btn btn-danger" value="Cancelar"> 
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