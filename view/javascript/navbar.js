var abriu = false;
function mostrarNav() {
  if (!abriu) {
    var boxes = document.querySelectorAll("nav section.box");
    for (let index = 0; index < boxes.length; index++) {
      const element = boxes[index];
      element.style.display = "block";
    }
    document.getElementById("Cmais").classList.remove("fa-plus-circle");
    document.getElementById("Cmais").classList.add("fa-minus-circle");
    abriu = true;
  } else {
    var boxes = document.querySelectorAll("nav section.box");
    for (let index = 0; index < boxes.length; index++) {
      const element = boxes[index];
      element.style.display = "none";
    }
    document.getElementById("Cmais").classList.remove("fa-minus-circle");
    document.getElementById("Cmais").classList.add("fa-plus-circle");
    abriu = false;
  }
}
