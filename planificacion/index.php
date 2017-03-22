<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="js/AjaxRequest.js"></script>
    <script src="js/manipularDom.js"></script>
    <script language="javascript" src="js/operador.js" type="text/javascript"></script>
   	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
     
    <link rel="stylesheet" href="css/iniciar_sesion.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
	<title>::UPTOS::</title>
</head>
<body>
<header>
	<div id="imagen" class="container">
	<!-- <img src="imagenes/header.jpg" alt="" id="header_logo" class="col-md-10"> -->
    <img src="imagenes/header.jpg" alt="">
	</div><br><br><br>
	
</header>

<section  id="login">
<div id="titulo"><h2>Iniciar Sesion</h2></div>
<div  class="container col-md-12 col-sm-12 well"><br>
  <form class="form-horizontal">
    <div class="form-group">
      <label for="Usuario" class="control-label col-md-4 col-sm-4 col-xs-7">Usuario: </label>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <input class="form-control" type="text" id="Usuario" name="usuario" autofocus required>
      </div>
    </div>
    <div class="form-group">
      <label for="Clave" class="control-label col-md-4 col-sm-4 col-xs-7">Clave: </label>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <input class="form-control" type="password" id="Clave" name="clave" onKeyPress="VerificarTecla(event);" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-4 col-md-offset-5 col-sm-4 col-sm-offset-4 ">
         <input type="button" onClick=" IniciarSesion();" id="enviar" value="Entrar" class="btn btn-primary">
        <!--<button class="btn btn-primary"> Entrar </button>-->
      </div>
    </div>
  </form>
</div>
</section>


<footer class="navbar navbar-default navbar-bottom navbar-fixed-bottom"  >
		<p>Universidad Politécnica Territorial del Oeste de Sucre "Clodosbaldo Russián", Km.4 Carretera Cumaná - Cumanacoa 
		Tlf(s): (0293) 4672138 / 4672136 / 4672150 / 4672154 Fax (0293) 4672153 - Rif: G-20010205-5 </p>
		

</footer>

</body>	
</html>


