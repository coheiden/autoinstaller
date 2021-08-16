
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
  xhttp.open("POST", "api/login.php", true);
  let json = (JSON.stringify(Object.fromEntries(formData))); //formData convertido a json
  //console.log(json)
  xhttp.send(json); //enviando los datos
}

function showMessage(message) {
  if (message.mensaje == 1) {
    window.setTimeout(function () {
      window.location.href = "portal.html";
      }, 1000);
  }else {
    if (message.mensaje == 0) {
      //let lead = document.getElementsByClassName("lead");
      //lead[0].innerHTML = "-- login invalido --";
      //lead[0].setAttribute("class", "lead text-danger");
      console.log("login invalido");
    } else {
      console.log("ERROR NO INSTALADO");
    }
  }
}