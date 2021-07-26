
document.addEventListener("DOMContentLoaded", main);

function doesFileExist(urlToFile) {
  var xhr = new XMLHttpRequest();
  xhr.open('HEAD', urlToFile, false);
  xhr.send();
   
  if (xhr.status == "404") {
      return false;
  } else {
      return true;
  }
}

function main() {
  checkConfig();
}

function checkConfig() {
let result = doesFileExist("config.php");
console.log(result);
if (result == true) {
  window.location.href = "login.html";
} else {
  window.location.href = "install.html"
}

}