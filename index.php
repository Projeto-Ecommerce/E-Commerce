<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script  src = " https://unpkg.com/feather-icons "></script> 
  <!-- STYLE CSS -->
  <link rel="stylesheet" href="frontend/css/index.css">
  <link rel="stylesheet" href="frontend/css/navbarDesktop.css">
  <link rel="stylesheet" href="frontend/css/cabecalho.css">
  <link rel="stylesheet" href="frontend/css/linhaDeChurrasqueiras.css">
  <link rel="stylesheet" href="frontend/css/produtos.css">
  <!-- FONT-STYLE -->
  <link href="//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
  <!-- FAVICON -->
  <link rel="icon" href="https://poligrill.com.br/media/favicon/websites/1/favicon.ico" type="image/x-icon">
  <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
  <title>E-Commerce</title>
</head>

<body>

  <!--    CABEÇALHO   -->
  <div class="row cabecalho">
    <!-- LOGO -->
    <div class="col-md-3 col-sm-12 coluna-logo">
      <img src="frontend/images/header_logo.png" class="header_logo" alt="header_logo">
    </div>

    <!-- PESQUISA E REDES SOCIAIS -->
    <div class="col-md-6 col-sm-12 coluna-pesquisa">
      <div class="row contato-row mb-md-5 me-md-5">

        <div class="col-md-4 contato-item">
        <a href="#" class="contato"><img class="icones-contato" src="frontend/images/icone-whats.png" coalt="icone-waths">(19) 98675-1255</a>
        
        </div>

        <div class="col-md-4 contato-item">
        <a href="#" class="contato"><img class="icones-contato" src="frontend/images/icone-tel.png" alt="icone-tel">(19) 3442-1515</a>
        </div>

        <div class="col-md-4 col-sm-12 contato-item">
        <a href="#" class="contato ms-5"><img class="icones-contato" src="frontend/images/icone-email.png" alt="icone-email"> churrascosbom@gmail.com</a>
        </div>
        
      </div>
      <div class="row row-pesquisa">
        <form class="d-flex form-pesquisa">
          <label for="pesquisar" class="label-pesquisar"><input class="search-input me-2" type="search" name="pesquisar" aria-label="Search"><button class="search-button" type="submit"><i class="fas fa-1x fa-search"></i></button></label>
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

<div class="container mt-5">
  <div class="row">
      
    <div class="col-md-3 col-sm-12 categorias-col">
      <ul class="categorias-list">
        <li class="categorias-head"><span><h5><b>CATEGORIAS</b></h5></span></li>
        <li class="categorias-item">
          <a class="categorias-link-dropdown" href="#">Churrasqueiras Residenciais</a>
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Churrasqueira para Embutir a Carvão</a></li>
            <li><a class="dropdown-item" href="#">Churrasqueira Portátil a Carvão</a></li>
          </ul>
        </li>
        <li class="categorias-item">
        <a class="categorias-link-dropdown" href="#">Churrasqueiras Profissionais</a>
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Churrasqueira para Embutir a Carvão</a></li>
            <li><a class="dropdown-item" href="#">Churrasqueira Portátil a Carvão</a></li>
          </ul>
        </li>
        <li class="categorias-item"><a class="categorias-link">Grill Giratório</a></li>

        <li class="categorias-item"><a class="categorias-link-dropdown" href="#">Acessórios</a>
          <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Grelha Argentina</a></li>
            <li><a class="dropdown-item" href="#">Espeto</a></li>
            <li><a class="dropdown-item" href="#">Grelha Moeda</a></li>
            <li><a class="dropdown-item" href="#">Anti Chama</a></li>
            <li><a class="dropdown-item" href="#">Pazinha Raspadora</a></li>
            <li><a class="dropdown-item" href="#">Peças de Reposição</a></li>
          </ul>
        </li>
        <li class="categorias-item"><a class="categorias-link" href="#">Fotos e Vídeos</a></li>
        <li class="categorias-item"><a class="categorias-link" href="#">Catálogo</a></li>
        <li class="categorias-item"><a class="categorias-link" href="#">Manuais</a></li>
        <li class="categorias-item"><a class="categorias-link" href="#">Empresa</a></li>
        <li class="categorias-item"><a class="categorias-link" href="#">Contato</a></li>
      </ul>
    </div>
    <div class="col-md-9">
      <div class="tittle-produtos"><span><h5><b>PRODUTOS</b></h5></span></div>
    
      <div class="col-md-2">
        <div class="card" style="width: 18rem;">
          <img src="frontend/images/header_logo.png" class="card-img-top" alt="churrasqueira_de_embutir">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
      <div class="card" style="width: 18rem;">
          <img src="frontend/images/header_logo.png" class="card-img-top" alt="churrasqueira_de_embutir">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
      <div class="card" style="width: 18rem;">
          <img src="frontend/images/header_logo.png" class="card-img-top" alt="churrasqueira_de_embutir">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>

  <!--   VIDEOS e REDES SOCIAIS   -->
  <section id="redesociais">
    <div class="container">
      <div class="row videos">
        <div class="row ">
          <h1 class="col-12 col-sm-12 col-md-4 title-videos">Assista os vídeos
            de nossas linhas</h1>
        </div>
        <div class="row apresentacaoVideos">
          <div class="col-12 col-sm-12 col-md-12 linkVideos">
            <iframe width="100%" class="iframeVideos" height="auto" src="https://www.youtube.com/embed/uAiQ85Bk9mk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
          <div class="col-12 col-sm-12 col-md-12 linkVideos">
            <iframe width="100%" class="iframeVideos" height="auto" src="https://www.youtube.com/embed/hWYQZjh2xYY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>


      <div class="row title-midias">
        <h2>Mídias Sociais</h2>
        <h3>Acompanhe a Poligrill</h3>
      </div>
      <div class="row mt-4 iframes">
        <div class="col-12 col-sm-12 col-md-4 container-midias">
          <div class="bgMidias">
            <h1 class="face">Facebook</h1>
          </div>
          <iframe frameborder="0" class="iframeMidias" height="460" scrolling="no" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fchurrasqueiraspoligrill%2F&amp;tabs=timeline&amp;width=340&amp;height=460&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=140674633269845" style="border: none; overflow: hidden;" width="340"></iframe>
        </div>
        <div class="col-12 col-sm-12 col-md-4 container-midias">
          <div class="bgMidias">
            <h1 class="face">Instagram</h1>
          </div>
          <p><iframe class="instagram-media instagram-media-rendered iframeMidias" id="instagram-embed-0" src="https://www.instagram.com/p/BgY0VMHHfwY/embed/captioned/?cr=1&amp;v=8&amp;wp=680&amp;rd=https%3A%2F%2Fpoligrill.com.br&amp;rp=%2Flinha-profissional.html#%7B%22ci%22%3A0%2C%22os%22%3A21244.464999996126%2C%22ls%22%3A21212.67500007525%2C%22le%22%3A21224.93499983102%7D" allowtransparency="true" allowfullscreen="true" frameborder="0" height="785" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white; max-width: 340px; height: 460px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: 0px 0px 12px; min-width: 326px; padding: 0px;"></iframe></p>
        </div>
        <div class="col-12 col-sm-12 col-md-4 container-midias">
          <div class="bgMidias">
            <h1 class="face">Youtube</h1>
          </div>
          <iframe frameborder="0" class="iframeMidias" height="460" id="ytplayer" src="https://www.youtube.com/embed/azCLDDL9gQ0?autoplay=0&amp;origin=https://example.com" width="340"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!--    APRESENTAÇÃO DA MARCA   -->
  <div class="container ">
    <div class="row apresentacao">
      <div class="card col-12 col-sm-12 col-md-3" style="width: 14rem;">
        <a href="" class="card-link">
          <img class="card-img-top" src="frontend/images/02---EMPRESA_33.png" alt="imagem da Empresa">
          <div class="card-body">
            <p class="card-title">BREVE HISTÓRIA</p>
            <p class="card-text">
              Nossos produtos foram desenvolvidos dentro de um trailer de espetinho, o desenvolvimento do produto foi sendo realizado com o intuito de resolver problemas encontrados durante o uso.
            </p>
          </div>
        </a>
        <a href="#" class="card-link" id="linkHistory">SAIBA MAIS DA NOSSA HISTÓRIA</a>
      </div>
      <div class="card col-12 col-sm-12 col-md-3" style="width: 14rem;">
        <a href="#" class="card-link">
          <img class="card-img-top" src="frontend/images/brasil.png" alt="imagem da bandeira Brasileira">
          <div class="card-body">
            <p class="card-title">PRODUZIDO NO BRASIL</p>
            <p class="card-text">
              Nossos produtos foram desenvolvidos dentro de um trailer de espetinho, o desenvolvimento do produto foi sendo realizado com o intuito de resolver problemas encontrados durante o uso.
            </p>
          </div>
        </a>
      </div>
      <div class="card col-12 col-sm-12 col-md-3" style="width: 14rem;">
        <a href="#" class="card-link">
          <img class="card-img-top" src="frontend/images/02---EMPRESA_28.jpg" alt="imagem da Empresa">
          <div class="card-body">
            <p class="card-title">PRODUTO PATENTEADO</p>
            <p class="card-text">
              Nossos produtos foram desenvolvidos dentro de um trailer de espetinho, o desenvolvimento do produto foi sendo realizado com o intuito de resolver problemas encontrados durante o uso.
            </p>
          </div>
        </a>
      </div>
      <div class="card col-12 col-sm-12 col-md-3">
        <a href="" class="card-img">
          <img id="imgCardSF" src="frontend/images/02---EMPRESA_18.png" alt="Imagem De Satisfação 100%">
        </a>
      </div>
    </div>
  </div>

  <!-- RODAPÉ -->

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