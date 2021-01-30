// cardSlides Produtos
function imgAtual(n, nSlider) {
  mostraImg((slideIndex = n), nSlider);
}

function mostraImg(n, nSlider) {
  var i;
  var imgTop = document.getElementsByClassName("slide-card-img" + nSlider);
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
  imgTop[slideIndex - 1].className += " selected-img-top";
}

// var containerNav = document.getElementsByClassName("navigation-imgs");
// var rowBtnsBuyNDetails = document.getElementsByClassName("buyAndDetails");
// function hoverCards(indice) {
//   containerNav[indice].style.display = "block";
//   rowBtnsBuyNDetails[indice].style.display = "inline-flex";
// }
// function outCards(indice) {
//   containerNav[indice].style.display = "none";
//   rowBtnsBuyNDetails[indice].style.display = "none";
// }

// fim cardSlides
