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
          <td>07:00 - 07:45 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>           
        </tr>

        <tr>
          <td>07:45 - 8:30 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>            
        </tr>
                <tr>
          <td>8:30 - 9:15 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>           
        </tr>
                <tr>
          <td>9:15 - 10:00 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>           
        </tr>
                <tr>
          <td>10:00 - 10:45 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>             
        </tr>
                <tr>
          <td>10:45 - 11:30 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>             
        </tr>
                <tr>
          <td>11:30 - 12:15 AM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>             
        </tr>

                        <tr>
          <td>12:15 - 1:00 PM</td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td>
          <td contenteditable='true'></td> 
          <td contenteditable='true'></td>             
        </tr>
</table>
<br><br><br>

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
          <td>1:00 - 1:45 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>           
        </tr>
                        <tr>
          <td>1:45 - 2:30 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>             
        </tr>
                        <tr>
          <td>2:30 - 3:15 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>            
        </tr>

                                <tr>
          <td>3:15 - 4:00 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>             
        </tr>

                                <tr>
          <td>4:45 - 5:30 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>            
        </tr>

                                <tr>
          <td>5:30 - 6:15 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>            
        </tr>

                                <tr>
          <td>6:15 - 7:00 PM</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td> 
          <td></td>              
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
