var ele = document.getElementById("answer");
var i = 0;
ele.addEventListener("keyup", function (event) {
  ele.classList.remove("corr");
  ele.classList.remove("animShake");
  if (event.keyCode === 13) {
    var answer = document.getElementById(ele.value.toLowerCase().trim());
    if (answer == null) {
      ele.classList.add("animShake");
      var audio = new Audio("../wrong.mp3");
      audio.play();
      ele.value = "";
    } else {
      if (!answer.classList.contains("correctAns")) {
        var audio = new Audio("../correct.mp3");
        audio.play();
        i++;
        answer.classList.add("correctAns");
        ele.classList.add("corr");
      }
      ele.value = "";
      if (i == 5) {
        document.getElementById("next").style.visibility = "visible";
        document.getElementById("win").style.visibility = "visible";
        document.getElementById("rep").style.visibility = "hidden";
        ele.blur();
      }
    }
  }
});
