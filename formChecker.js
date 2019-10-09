document.addEventListener('DOMContentLoaded', (e) => {})
var wicked = document.getElementById("wickedGnome").value;
var hippy = document.getElementById("hippyGnome").value;
var flower = document.getElementById("flowerGnome").value;
var form = document.forms["form"]["wickedGnome"].value;

function validateForm() {
  if(wicked < 0){
    alert("You may not purchase negative items.");
    return false;
  }
}
