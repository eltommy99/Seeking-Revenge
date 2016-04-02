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
