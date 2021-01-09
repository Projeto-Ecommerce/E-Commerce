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

        <!-- PERFIL E CARRINHO DE COMPRAS -->
        <div class="col-md-3 col-sm-12 col-xs-12">

        </div>
    </div>
    <!--    NAVBAR  -->
    <?php require_once ('backend/share/navbar.php') ?>
    <!--    CARROSEL    -->

    <!--    LINHAS DE CHURRASQUEIRAS    -->

    <!--    PRODUTOS    -->

    <!--    APRESENTAÇÃO DA MARCA   -->

    <!--    REDES SOCIAIS   -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>