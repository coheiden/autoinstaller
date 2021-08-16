
document.addEventListener("DOMContentLoaded", main);

function main() {
  addListenerForm();
}

function addListenerForm() {
  let formulario = document.getElementById("formulario");
  //console.log(formulario);
  formulario.addEventListener('submit', function (e) {
    e.preventDefault();
 
    enviaForm(e.currentTarget);
  });
}

function enviaForm(formElement) {
  let formData = new FormData(formElement);
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let respuesta = JSON.parse(this.responseText);
      showMessage(respuesta);
    }
  };
  xhttp.open("POST", "api/install.php", true);
  xhttp.send(formData);
  //console.log(formData);
}

function showMessage(message) {
  if (message.mensaje == 1) {
    window.setTimeout(function () {
      window.location.href = "index.html";
      }, 1000);
  }else {
    if (message.mensaje == 0) {
      //let lead = document.getElementsByClassName("lead");
      //lead[0].innerHTML = "-- login invalido --";
      //lead[0].setAttribute("class", "lead text-danger");
      console.log("DATOS ERRONEOS - NO CONECTA");
    } else {
      console.log("ERROR DESCONOCIDO REINSTALA DE NUEVO");
    }
  }
}