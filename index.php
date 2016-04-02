<!Doctype html>
<html>
<head>
     <meta charset="utf-8">
     <title>Seeking Revenge</title>
     <link rel="stylesheet" type="text/css" href="estilo/estilopopups.css">
</head>
<body  onload="myFunction()">

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
