// cardSlides Produtos
function imgAtual(n) {
  mostraImg((slideIndex = n));
}

function mostraImg(n) {
  var i;
  var imgTop = document.getElementsByClassName("slide-card-img");
  var imgNav = document.getElementsByClassName("navImg");
  if (n > imgTop.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = imgTop.length;
  }
  for (i = 0; i < imgTop.length; i++) {
    imgTop[i].style.display = "none";
  }
  for (var i = 0; i < imgNav.length; i++) {
    imgNav[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("selected-nav");
      current[0].className = current[0].className.replace(" selected-nav", "");
      this.className += " selected-nav";
    });
  }
  imgTop[slideIndex - 1].style.display = "block";
}

var containerNav = document.getElementsByClassName("navigation-imgs");
var rowBtnsBuyNDetails = document.getElementsByClassName("buyAndDetails");
function hoverCards(indice) {
  containerNav[indice].style.display = "block";
  rowBtnsBuyNDetails[indice].style.display = "inline-flex";
}
function outCards(indice) {
  containerNav[indice].style.display = "none";
  rowBtnsBuyNDetails[indice].style.display = "none";
}

// fim cardSlides
