var ele = document.getElementById("answer");
var i = 0;
ele.addEventListener("keyup", function (event) {
  if (event.keyCode === 13) {
    var answer = document.getElementById(ele.value.toLowerCase().trim());
    if (answer == null) {
      alert("Wrong");
      ele.value = "";
    } else {
      if (!answer.classList.contains("correctAns")) {
        i++;
        answer.classList.add("correctAns");
      }
      ele.value = "";
      if (i == 6) {
        var n = (document.getElementById("next").style.visibility = "visible");
      }
    }
  }
});
