var ele = document.getElementById("answer");
ele.addEventListener("keyup", function (event) {
  if (event.keyCode === 13) {
    var answer = document.getElementById(ele.value.toLowerCase().trim());
    if (answer == null) {
      alert("Wrong");
      ele.value = "";
    } else {
      answer.classList.add("correctAns");
      ele.value = "";
    }
  }
});
// Get the modal
var modal = document.getElementById('myModal');



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

