<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- STYLE CSS -->
  <link rel="stylesheet" href="frontend/css/index.css">
  <link rel="stylesheet" href="frontend/css/navbarDesktop.css">
  <link rel="stylesheet" href="frontend/css/cabecalho.css">
  <link rel="stylesheet" href="frontend/css/linhaDeChurrasqueiras.css">

  <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
  <title>E-Commerce</title>
</head>

<body>

  <!--    CABEÇALHO   -->
  <div class="row cabecalho">
    <!-- LOGO -->
    <div class="col-md-4 col-sm-12 coluna-logo">
      <img src="frontend/images/header_logo.png" class="header_logo" alt="header_logo">
    </div>

    <!-- PESQUISA E REDES SOCIAIS -->
    <div class="col-md-5 col-sm-12 coluna-pesquisa">
      <div class="row contato">

      </div>
      <div class="row row-pesquisa">
        <form class="d-flex form-pesquisa">
          <label for="pesquisar" class="label-pesquisar"><input class="search-input me-2" type="search" name="pesquisar" aria-label="Search"><i class="fas fa-1x fa-search"></i></label>
          <button class="btn btn-outline-success btn-pesquisar" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
  <!-- PERFIL E CARRINHO DE COMPRAS -->

  <!--    NAVBAR  -->
  <?php require_once('backend/share/navbar.php') ?>
  <!--    CARROSEL    -->
  <div id="carousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="d-block w-100" src="frontend/images/carrousel1.jpg" alt="First slide">
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="frontend/images/slider_pic2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="frontend/images/slider_pic3.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
  <!--    LINHAS DE CHURRASQUEIRAS    -->
  <section id="linhas-de-churrasqueiras">
    <div class="container">
      <div class="row linhas">
        <h1 class="title-linhas">
          <div class=" col-8 col-sm-8 col-md-4" style="margin:auto">
            Conheça nossas linhas
          </div>
        </h1>
      </div>
      <div class="row banners">
        <div class="col-12 col-sm-12 col-md-6">
          <a href="#" class="lnkBanners">
            <img src="frontend/images/banner-residencial-v2.1.jpg" class="imgLinhas" alt="Banner Da Linha Residencial">
          </a>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
          <a href="#" id="lnkBannerProfissional">
            <img src="frontend/images/banner-profissional-v2.1.jpg" class="imgLinhas" alt=" Banner Da Linha Profissional">
          </a>
        </div>
      </div>
      <div class="row icones">
        <div class="col-12 col-sm-3">
          <a href="javascript:void(0)">
            <img src="frontend/images/ICONE_GOURMET.png" class="imgIcons" alt="Icone Gourmet">
          </a>
        </div>
        <div class="col-12 col-sm-3">
          <a href="javascript:void(0)">
            <img src="frontend/images/ICONE_GIRATÓRIA EMBUTIR.png" class="imgIcons" alt="Icone GIRATÓRIA EMBUTIR">
          </a>
        </div>
        <div class="col-12 col-sm-3">
          <a href="javascript:void(0)">
            <img src="frontend/images/ICONE_EMPREENDEDORES.png" class="imgIcons" alt="Icone ICONE_EMPREENDEDORES">
          </a>
        </div>
        <div class="col-12 col-sm-3">
          <a href="javascript:void(0)">
            <img src="frontend/images/ICONE_FOOD TRUCK.png" class="imgIcons" alt="Icone FOOD TRUCK">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!--    PRODUTOS    -->

  <!--    APRESENTAÇÃO DA MARCA   -->

  <!--    REDES SOCIAIS   -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>