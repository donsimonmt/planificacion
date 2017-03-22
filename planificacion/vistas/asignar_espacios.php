<?php
    @session_start();
  if (!session_is_registered('login') && empty($_SESSION['login']))
  {
    header ("Location: index.php");
  }

?>
  <section id="login_asig" class="container  ">
    <div id="titulo"><h2>Asignar Espacio</h2></div>
    <div  class="container row-fluid  well"><br>
     <?php
                if(isset($_SESSION['tipo_coordinador'])){
                            if($_SESSION['tipo_coordinador']=="2"){
                              echo "<!--";
                            }    }?>
    <form class="form-horizontal">
        <div class="form-group">
          <label for="Departamentos" class="control-label col-md-2 col-sm-2 col-xs-7">Departamentos</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="dep_coordinador" id="dep_coordinador" >
              <option value="-1"></option>              
            </select>
          </div>
          
          <label for="Modulo" class="control-label col-md-1 col-sm-2 col-xs-7">Edificio</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="mod_salon" id="mod_salon" onclick="buscarSalon();">
              <option value="-1"></option>              
            </select>
          </div>

          <label for="salon" class="control-label col-md-1 col-sm-2 col-xs-2">Salón</label>
          <div class="col-md-2  col-sm-4 col-xs-12">
            <select class="form-control" name="sal_pla" id="sal_pla">
              <option value="-1">Seleccionar</option>              
            </select>
          </div>
        </div>
        <div class="alert alert-error" name="error" style="display: none">
          <button class="close" type="button" data-dismiss="alert">×</button>
          <span id="errorbox_description"></span>
        </div>
        <br>

        <div class="form-group">
        <div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-4 ">
        
          <button type="button" id="enviar" onClick="RegistrarAsig();"  class="btn btn-primary" value="">
              <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
            </button>
            
            <button type="button" id="modificar" onClick="modificarAsignacio();" disabled="true" class="btn btn-primary" value="Modificar">
                <span class="glyphicon glyphicon-edit"></span> Modificar
            </button>
            
            <a href="#" onclick="call_view('Vista/lista_salon.php')"><input type="button" id="listar"  class="btn btn-primary" value="Listar"></a>
            
            <button type="button" id="cancelar" onClick="cancelarAsig();" class="btn btn-danger" value="Cancelar"> 
                <span class="glyphicon glyphicon-remove"></span> Cancelar 
            </button>

         </div>
          </div>  
    </form><br><br><?php if(isset($_SESSION['tipo_coordinador']))
                            { if($_SESSION['tipo_coordinador']=="2" ){
                              echo "-->";
                            }   } ?>


    <div class="container col-md-12 col-sm-12"  >

      <table class="table table-striped table-bordered table-hover">
      <div ><h2>Espacios Asignados</h2></div>
        <thead>
          <tr>
            <th class="col-md-2" style="text-align:center">Departamento</th>
            <th class="col-md-2" style="text-align:center">Edificio</th>
            <th class="col-md-2" style="text-align:center">Salón</th>
            <th class="col-md-1" style="text-align:center">Action</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </div>

</section>
<style>
  footer{
    display: none;
  }
  #login_asig{
  padding: 1em;
  margin: auto;
  width: 70%;
  }
</style>
<script type="text/javascript">
  BuscaMod();
  ver_asignacion();
  busca_departamento();
</script>