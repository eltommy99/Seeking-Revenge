<!Doctype html>
<html>
<head>
     <meta charset="utf-8">
     <title>Seeking Revenge</title>
     <link rel="stylesheet" type="text/css" href="estilo/cssmenu/styles.css" >
     <link rel="stylesheet" type="text/css" href="estilo/index.css" >
     <link rel="stylesheet" type="text/css" href="estilo/estilopopups.css">
   <!--Abajo estan los estilos de bootstrap para la imagen-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<nav>
  <div id='cssmenu'>
    <ul>
      <li><a href="#">Soporte</a></li>
      <li><a href="#">Información</a></li>
      <li><a href="#">Tienda</a></li>
      <li><a href="#">Comunidad</a></li>
      <li><a href="#">Iniciar Sesión</a></li>
      <li><a href="#">Registrarse</a>
    </ul>
  </div>
</nav>








  <body  onload="myFunction()">
    <div class="container">
      <img src="img/blood-splatter1.png" class="img-responsive" alt="BloodSplatter" width="100%" height="900px">
    </div>

  <div id="myModal" class="modal">


    <div class="modal-content">
      <span class="close">×</span>
      <p class="pop">no olvides descargar el juego el cual sera lanzado en noviembre</p>
    </div>

  </div>














  <script>
  var modal = document.getElementById('myModal');



  var span = document.getElementsByClassName("close")[0];

  function myFunction()  {
      modal.style.display = "block";
  }

  span.onclick = function() {
      modal.style.display = "none";
  }

  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>


<footer>
2016 Masacre, Inc. Todos los derechos reservados. <br>
Politica De Privacidad | Terminos De Uso | Foro
</footer>

</body>
</html>
