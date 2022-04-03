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
