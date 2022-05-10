// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
var tablinks = document.querySelectorAll("div.tablinks");

for (var i = 0; i < tablinks.length; i++) {
  tablinks[i].onclick = function (e) {
    openForm(
      e.target.getAttribute("data-form-id"),
      e.target.getAttribute("id")
    );
  };
}

function openForm(formid, tabid) {
  var tabcontent = document.querySelectorAll("div.tabcontent");
  var links = document.querySelectorAll("div.tablinks");
  for (var i = 0; i < links.length; i++) {
    links[i].classList.remove("active");
  }
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(formid).style.display = "block";
  document.getElementById(tabid).classList.add("active");
}
document.getElementById("logintab").click();

var guide = document.getElementById("guide");
var gg = document.getElementById("gg");

gg.onclick = function () {
  guide.style.display = "block";
};
var spn = document.getElementsByClassName("close")[1];

spn.onclick = function () {
  guide.style.display = "none";
};

window.addEventListener("click", function (event) {
  if (event.target == guide) {
    guide.style.display = "none";
  }
});



var credits = document.getElementById("credits");
var crd = document.getElementById("crd");

crd.onclick = function () {
  credits.style.display = "block";
};
var close2 = document.getElementsByClassName("close")[2];

close2.onclick = function () {
  credits.style.display = "none";
};

window.addEventListener("click", function (event) {
  if (event.target == guide) {
    credits.style.display = "none";
  }
});


var welcome = document.getElementById("welcome");

var spn1 = document.getElementsByClassName("close")[3];

spn1.onclick = function () {
  welcome.style.display = "none";
};

window.addEventListener("click", function (event) {
  if (event.target == welcome) {
    welcome.style.display = "none";
  }
});
