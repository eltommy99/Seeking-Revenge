<!Doctype html>
<html>
<head>
     <meta charset="utf-8">
     <title>Seeking Revenge</title>

     <link rel="stylesheet" type="text/css" href="estilo/index.css" >
     <link rel="stylesheet" type="text/css" href="estilo/estilopopups.css">
        <link rel="stylesheet" type="text/css" href="estilo/estilos.css">
</head>

<body  onload="myFunction()">

  <button onclick="myInicio()">INICIAR SESION</button>






    <div id="myModal" class="popinicial">


      <div class="modal-content">
        <span class="close">×</span>
        <p class="pop">No olvides descargar el juego, el cual será lanzado en Noviembre.</p>
      </div>

    </div>


    <div id="Modals" class="popsesion">
    <div class="modal-content">
    <span class="closes">×</span>
    <p class="pop">USUARIO</p> <input type="text" name="Usuario"><br>
    <p class="pop">CONTRASEÑA</p> <input type="password" name="Contraseña">

    </div>


    </div>


<nav>
  <ul>

    <li><a href="#">Soporte</a></li><hr>

    <li><a href="#">Información</a></li><hr>

    <li><a href="#">Tienda</a></li><hr>

    <li><a href="#">Comunidad</a></li><hr>
    <li><a href="#">Sesión </a>
     <ul>


       <li><a href="#">Iniciar Sesión</a></li>

       <li><a href="#">Registrarse</a></li>

     </ul>
    </li><hr>

    </ul>
    </nav>




















  <script>
  var modal = document.getElementById('myModal');
  var modals = document.getElementById('Modals');



  var span = document.getElementsByClassName("close")[0];
  var span2 = document.getElementsByClassName("closes")[0];


  function myFunction()  {
      modal.style.display = "block";
  }
  function myInicio() {
        modals.style.display = "block";
    }


  span.onclick = function() {
      modal.style.display = "none";
  }
  span2.onclick = function() {
      modals.style.display = "none";
  }


  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  window.onclick = function(event) {
      if (event.target == modals) {
          modals.style.display = "none";
      }
  }
  </script>


<footer>
2016 Masacre, Inc. Todos los derechos reservados. <br>
Politica De Privacidad | Terminos De Uso | Foro
</footer>

</body>
</html>
