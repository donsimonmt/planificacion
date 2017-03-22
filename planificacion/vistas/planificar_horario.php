<?php
    @session_start();
  if (!session_is_registered('login') && empty($_SESSION['login']))
  {
    header ("Location: index.php");
  }

?>
       

<section id="login_horario" class="container  ">
    <div id="titulo"><h2>Planificar Horarios</h2></div>
    <div  class="container row-fluid  well"><br>
    <form class="form-horizontal">
        <div class="form-group">
          
          <label for="Modulo" class="control-label col-md-1 col-sm-2 col-xs-7">Módulo</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="mod_salon" onclick="buscarSalon();">
              <option value="-1"></option>              
            </select>
          </div>

          <label for="salon" class="control-label col-md-2 col-sm-2 col-xs-2">Salón</label>
          <div class="col-md-2  col-sm-4 col-xs-12">
            <select class="form-control" name="" id="sal_pla">
              <option value="-1"></option>              
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="Trayecto" class="control-label col-md-1 col-sm-2 col-xs-7">Trayecto</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="tra_pla">
              <option value="-1"></option>
              
            </select>
          </div>
          <label for="periodo academico" class="control-label col-md-2 col-sm-2 col-xs-2">periodo academico</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="per_pla">
              <option value="-1"></option>              
            </select>
          </div>

          <label for="Materia" class="control-label col-md-2 col-sm-8 col-xs-7">Materia</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="mat_pla">
              <option value="-1"></option>
              
            </select>
          </div>          
        </div>
           
          <div class="form-group">
          <label for="seccion" class="control-label col-md-1 col-sm-2 col-xs-7">seccion</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="secc_pla">
              <option value="-1"></option>              
            </select>
          </div>         
        
          
          <label for="Mencion" class="control-label col-md-2 col-sm-2 col-xs-7">Mencion</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="men_pla">
              <option value="-1"></option>              
            </select>
          </div>            
        </div><br>
        <br>

        <div class="form-group">
          <label for="dia" class="control-label col-md-1 col-sm-2 col-xs-2">dia</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="sal_pla">
              <option value="-1"></option>              
            </select>
          </div>         
        
          
          <label for="Hora Inicio" class="control-label col-md-2 col-sm-2 col-xs-7">Hora Inicio</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="mod_salon">
              <option value="-1"></option>              
            </select>
          </div> 

         <label for="Hora Final" class="control-label col-md-2 col-sm-8 col-xs-7">Hora Final</label>
          <div class="col-md-2 col-sm-4 col-xs-12">
            <select class="form-control" name="" id="mod_salon">
              <option value="-1"></option>              
            </select>
          </div>        
        </div>
                 
    </form>

</div>

 
    <div class="container row-fluid  well"  >
      <table class="table table-striped table-bordered table-hover">
        <tr>
          <th class="col-md-1">Horario</th>
          <th class="col-md-1">Lunes</th>
          <th class="col-md-1">Martes</th>
          <th class="col-md-1">Miercoles</th>
          <th class="col-md-1">Jueves</th>
          <th class="col-md-1">Viernes</th>
        

        </tr>

        <tr>
          <td>07:00-07:45</td>
          <td>".$row[1]."</td>
          <td>".$row[2]."</td>
          <td>".$row[3]."</td>
          <td>".$row[4]."</td>          
        </tr>
       
       </table>
    </div>
  </section>
<style>
  footer{
    display: none;
  }
  #login_horario,#lista_horario{
  padding: 1em;
  margin: auto;
  width: 80%;
  }
</style>
<script type="text/javascript">
  BuscaMod();
</script>