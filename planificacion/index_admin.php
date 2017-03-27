<?php
		@session_start();
	if (!session_is_registered('login') && empty($_SESSION['login']))
	{
		header ("Location: index.php");
	}
	  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>::UPTOS-Clodosbaldo Russian::</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="bootstrap/js/jquery.js"></script>	
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/toastr.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/AjaxRequest.js"></script>
	<script type="text/javascript" src="js/manipularDom.js"></script>
	<script type="text/javascript" src="js/valida_form.js"></script>
    <script type="text/javascript" src="js/asignarEspacio.js"></script>
    <script type="text/javascript" src="js/operador.js"></script>
    <script type="text/javascript" src="js/modulo.js"></script>
    <script type="text/javascript" src="js/departamento.js"></script>
    <script type="text/javascript" src="js/planificar_horario.js"></script>
    <script type="text/javascript" src="js/salon.js"></script>
    <script type="text/javascript" src="js/modulo.js"></script>    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/toastr.min.css">
    <link rel="stylesheet" href="css/style_admin.css">
    <link rel="stylesheet" href="css/iniciar_sesion.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="imagenes/logo-uptos.gif" />
</head>
<body>
	<header class="navbar-fixed-top">
		<div id="imagen" class="container">
			<img src="imagenes/header.jpg" alt="">departamento: <?php echo $_SESSION['nomb_dep']; ?><br>
													Tipo: <?php echo ($_SESSION['tipo_coordinador']==1?'ADMINISTRADOR':' COORDINADOR'); ?>
		</div><br>
		
		<section id="navegador" class="container">
			<nav class="navbar navbar-default ">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="index_admin.php"> <span class="glyphicon glyphicon-home"></span><!-- Inicio --></a></li>
				
						<li><a href="#" onclick="call_view('vistas/planificar_horario.php')">Planificar Horario</a></li>

						<?php
					      if(isset($_SESSION['tipo_coordinador'])){
                            if($_SESSION['tipo_coordinador']=="2"){
                              echo "<!--";
                            }    }?>
						
						<li><a href="#" onclick="call_view('vistas/control_coordinador.php')">Control de Coordinador</a></li>
						   <?php if(isset($_SESSION['tipo_coordinador']))
                            { if($_SESSION['tipo_coordinador']=="2" ){
                              echo "-->";
                            }   } ?>                       	
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Infraestructuras <span class="caret"></span></a>
							<ul class="dropdown-menu nav nav-tabs">
								<?php
					      if(isset($_SESSION['tipo_coordinador'])){
                            if($_SESSION['tipo_coordinador']=="2"){
                              echo "<!--";
                            }    }?>
								<li><a href="#" onclick="call_view('vistas/salon.php')"> Salon</a></li>
								<li><a href="#"onclick="call_view('vistas/modulo.php')">Edificio</a></li><?php if(isset($_SESSION['tipo_coordinador']))
                            { if($_SESSION['tipo_coordinador']=="2" ){
                              echo "-->";
                            }   } ?>  
								<li><a href="#"onclick="call_view('vistas/asignar_espacios.php')">Asignar Espacios</a></li>
							</ul>
						</li>
			<?php
					      if(isset($_SESSION['tipo_coordinador'])){
                            if($_SESSION['tipo_coordinador']=="2"){
                              echo "<!--";
                            }    }?>
						<li class="dropdown">
							<a href="#" onclick="call_view('vistas/departamento.php')" class="dropdown-toggle" data-toggle="dropdown">Departamentos </a>
						</li>
					<?php if(isset($_SESSION['tipo_coordinador']))
                            { if($_SESSION['tipo_coordinador']=="2" ){
                              echo "-->";
                            }   } ?>
				

				    
	      				
	      				<li id="cerrar"  ><a href='#' onClick="CerrarSesion();"><span class="glyphicon glyphicon-off" ></span> Cerrar Sesion</a></li>
	    			</ul>
				</div>
			</nav>
		</section>
	
	</header>
     	
	<section id="contenedor" class="container"><br><br>
	

	<div id="bienvenido">
		<h3> <span>¡Bienvenido!</span> <span><?php echo $_SESSION['nombre_usuario']?></span> <span><?php echo $_SESSION['apellido_usuario']?></span></h3>
	</div>	<br>





		<div id="banner" >
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imagenes/pnf1.jpg" alt="" class="container">
    </div>

    <div class="item">
      <img src="imagenes/pnf2.jpg" alt="" class="container">
    </div>

    <div class="item">
      <img src="imagenes/pnf3.jpg" alt="" class="container">
    </div>

    <div class="item">
      <img src="imagenes/pnf4.jpg" alt="" class="container">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
       		</div>
       		
		</div>
	</section>

	<footer class="navbar navbar-default navbar-bottom navbar-fixed-bottom" >
		<p>Universidad Politécnica Territorial del Oeste de Sucre "Clodosbaldo Russián", Km.4 Carretera Cumaná - Cumanacoa 
		Tlf(s): (0293) 4672138 / 4672136 / 4672150 / 4672154 Fax (0293) 4672153 - Rif: G-20010205-5 </p>
	</footer>	
</body>
</html>
<script>
			
  function call_view(segmento)
  {
	  AjaxRequest.post(
		  {
			  'url':segmento
			  ,'onSuccess':function(req)
			  { 
				  document.getElementById('contenedor').innerHTML = req.responseText;
				  var elementos = document.getElementById('contenedor').getElementsByTagName('script');
				  for(i=0;i<elementos.length;i++)
				  {	
					  var eScript=elementos[i].text;
					  eval(eScript);
				  }
				 
			  }
		  }
	  )	
  }
</script>

<style>
	
#bienvenido h3 {
  /* margin: 20px; */
  font-family: "helvetica";
  color: #202020;
 
 
}
#bienvenido{
	background: #E9E9E9;
	padding: 1em;
	width: 80%;
	margin:auto;
}

#bienvenido  h3 span {
  display: block;
  margin: 11px 0 17px 0;
  font-size: 60px;
  line-height: 60px;
  
  text-shadow: 0 13.36px 8.896px #BBBBBB,0 -2px 1px #fff;
  letter-spacing: -4px;
}

#bienvenido  h3 span:nth-child(2){
	
	color: #686262;
}


</style>
