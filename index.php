<!Doctype html>
<html>
<head>
     <meta charset="utf-8">
     <title>Seeking Revenge</title>
     <link rel="stylesheet" type="text/css" href="estilo/cssmenu/styles.css" >
     <link rel="stylesheet" type="text/css" href="estilo/index.css" >
     <link rel="stylesheet" type="text/css" href="estilo/estilopopups.css">
     <link rel="stylesheet" type="text/css" href="estilo/estilos.css">
   <!--Abajo estan los estilos de bootstrap para la imagen-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body onload="myFunction()">

  <nav>
    <div id='cssmenu'>
      <ul>
        <li><a href="#">Soporte</a></li>
        <li><a href="#">Información</a></li>
        <li><a href="#">Tienda</a></li>
        <li><a href="#">Comunidad</a></li>
        <li><a onclick="myInicio()">Iniciar Sesión</a>
      </ul>
    </div>
  </nav>


    <img src="img/blood-splatter1.png" class="img-responsive" alt="BloodSplatter" width="100%" height="300px">


   <div id="myModal" class="popinicial">
      <div class="modal-content">
         <span class="close">×</span>
        <p class="pop">No olvides descargar el juego, el cual será lanzado en Noviembre.</p>
      </div>
   </div>

  <div id="Modals" class="popsesion">
    <div class="modal-content">
      <span class="closes">×</span>
      <form class="" action="index.html" method="post">
         <label class="pop">USUARIO <br> <input type="text" name="Usuario"></label><br>
        <label class="pop">CONTRASEÑA  <br>  <input type="password" name="Contraseña"></label>
      </form>
    </div>
  </div>




 <script src="script/popupsS.js"></script>

<footer>
2016 Masacre, Inc. Todos los derechos reservados. <br>
Politica De Privacidad | Terminos De Uso | Foro
</footer>

</body>
</html>
