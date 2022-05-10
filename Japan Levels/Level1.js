var ele = document.getElementById("answer");
var winPopup = document.getElementById("winPopup");
var i = 0;
var score = 0;
var totalTries = 0;
var totalScore = 0;
totalScore = parseInt(sessionStorage.getItem("totalScore"));

ele.addEventListener("keyup", function (event) {
  ele.classList.remove("corr");
  ele.classList.remove("animShake");
  if (event.keyCode === 13) {
    totalTries++;
    var answer = document.getElementById(ele.value.toLowerCase().trim());
    if (answer == null) {
      ele.classList.add("animShake");
      var audio = new Audio("../wrong.mp3");
      audio.play();
      ele.value = "";
      score = (6/totalTries)*60;
    } else {
      if (!answer.classList.contains("correctAns")) {
        var audio = new Audio("../correct.mp3");
        audio.play();
        i++;
        answer.classList.add("correctAns");
        ele.classList.add("corr");
        score = (6/totalTries)*60;
      }
      ele.value = "";
      
      if (i == 6) {
        totalScore += score;
        sessionStorage.setItem("totalScore",totalScore);
        document.getElementById("win").style.visibility = "visible";
        document.getElementById("rep").style.visibility = "hidden";
        ele.blur();
        winPopup.style.display = "block";
        document.getElementById("scoreDisplay").innerHTML = score ;
        document.getElementById("totalTries").innerHTML = totalTries  ;
      }
    }
  }
});


