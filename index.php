<?php 
require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php require_once 'backend/share/head.php';?>
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
  <section id="produtos">
    <div class="container" style="margin-left: 0.5vh;margin-top: 5vh;">
      <div class="row">
        <?php include_once('backend/share/produtosNavigation.php') ?>
        <!--    CARDS PRODUTOS    -->
        <!-- card 1 -->
        <div class="card-produtos col-md-3">
          <img class="card-img-top slide-card-img1 selected-img-top" src="frontend/images/produtos/lz_00395_1.jpg" style="width: 100%; display: block;">
          <img class="card-img-top slide-card-img1" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img1" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img1" src="frontend/images/produtos/lz_00395_1.jpg" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img1" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img1" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width: 100%; display: none;">
          <div class="card-body">
            <div class="thz-content navigation-imgs" style="max-width:100%">
              <div class="row">
                <div class="col-md-4 col-4">
                  <img class="navImg selected-nav" src="frontend/images/produtos/lz_00395_1.jpg" style="width:100%" onclick="imgAtual(1,1)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width:100%" onclick="imgAtual(2,1)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width:100%" onclick="imgAtual(3,1)">
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/lz_00395_1.jpg" style="width:100%" onclick="imgAtual(4,1)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width:100%" onclick="imgAtual(5,1)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width:100%" onclick="imgAtual(6,1)">
                </div>
              </div>
            </div>
            <div class="row card-title mt-4">
              <p>Churrasqueira Espetinho Giratório Inox a Carvão - Balcão c/ 2 Grill Giratório p/ 39 espetinhos - PoliGrill - M20G3B2IC</p>
            </div>
            <div class="row card-info">
              <p class="pol-code">Cod. PoliGrill M20G3B2IC</p>
              <p class="custo">12x <span class="greenMoneyIndicator">395,83</span> s/ juros</p>
              <p class="preco" name="preco">R$4.750,00</p>
              <p class="precoDep">ou R$ 4.512,00 via depósito</p>
            </div>
            <div class="row buyAndDetails">
              <a href="javascript:void(0)" class="col-md-2 details"><i class="fas fa-plus-circle" id="Cmais"></i>DETALHES</a>
              <a href="javascript:void(0)" class="col-md-6 buy" id="btn-buy"><i class="fas fa-shopping-cart"></i>COMPRAR</a>
            </div>
          </div>
        </div>
        <!-- card 2 -->
        <div class="card-produtos col-md-3" >
          <img class="card-img-top slide-card-img2 selected-img-top" src="frontend/images/produtos/lz_00395_1.jpg" style="width: 100%; display: block;">
          <img class="card-img-top slide-card-img2" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img2" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img2" src="frontend/images/produtos/lz_00395_1.jpg" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img2" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img2" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width: 100%; display: none;">
          <div class="card-body">
            <div class="thz-content navigation-imgs" style="max-width:100%">
              <div class="row">
                <div class="col-md-4 col-4">
                  <img class="navImg selected-nav" src="frontend/images/produtos/lz_00395_1.jpg" style="width:100%" onclick="imgAtual(0,2)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width:100%" onclick="imgAtual(1,2)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width:100%" onclick="imgAtual(2,2)">
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/lz_00395_1.jpg" style="width:100%" onclick="imgAtual(3,2)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width:100%" onclick="imgAtual(4,2)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width:100%" onclick="imgAtual(5,2)">
                </div>
              </div>
            </div>
            <div class="row card-title mt-4">
              <p>Churrasqueira Espetinho Giratório Inox a Carvão - Balcão c/ 2 Grill Giratório p/ 39 espetinhos - PoliGrill - M20G3B2IC</p>
            </div>
            <div class="row card-info"> 
              <p class="pol-code">Cod. PoliGrill M20G3B2IC</p>
              <p class="custo">12x <span class="greenMoneyIndicator">395,83</span> s/ juros</p>
              <p class="preco" name="preco">R$4.750,00</p>
              <p class="precoDep">ou R$ 4.512,00 via depósito</p>
            </div>
            <div class="row buyAndDetails">
              <a href="javascript:void(0)" class="col-md-2 details"><i class="fas fa-plus-circle" id="Cmais"></i>DETALHES</a>
              <a href="javascript:void(0)" class="col-md-6 buy" id="btn-buy"><i class="fas fa-shopping-cart"></i>COMPRAR</a>
            </div>
          </div>
        </div>
        <!-- card 3 -->
        <div class="card-produtos col-md-3">
          <img class="card-img-top slide-card-img3 selected-img-top" src="frontend/images/produtos/lz_00395_1.jpg" style="width: 100%; display: block;">
          <img class="card-img-top slide-card-img3" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img3" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img3" src="frontend/images/produtos/lz_00395_1.jpg" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img3" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width: 100%; display: none;">
          <img class="card-img-top slide-card-img3" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width: 100%; display: none;">
          <div class="card-body">
            <div class="thz-content navigation-imgs" style="max-width:100%">
              <div class="row">
                <div class="col-md-4 col-4">
                  <img class="navImg selected-nav" src="frontend/images/produtos/lz_00395_1.jpg" style="width:100%" onclick="imgAtual(0,3)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width:100%" onclick="imgAtual(1,3)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width:100%" onclick="imgAtual(2,3)">
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/lz_00395_1.jpg" style="width:100%" onclick="imgAtual(3,3)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_45_direita.png" style="width:100%" onclick="imgAtual(4,3)">
                </div>
                <div class="col-md-4 col-4">
                  <img class="navImg" src="frontend/images/produtos/l.p.b.m20.2grill-site_tampa_aberta.png" style="width:100%" onclick="imgAtual(5,3)">
                </div>
              </div>
            </div>
            <div class="row card-title mt-4">
              <p>Churrasqueira Espetinho Giratório Inox a Carvão - Balcão c/ 2 Grill Giratório p/ 39 espetinhos - PoliGrill - M20G3B2IC</p>
            </div>
            <div class="row card-info">
              <p class="pol-code">Cod. PoliGrill M20G3B2IC</p>
              <p class="custo">12x <span class="greenMoneyIndicator">395,83</span> s/ juros</p>
              <p class="preco" name="preco">R$4.750,00</p>
              <p class="precoDep">ou R$ 4.512,00 via depósito</p>
            </div>
            <div class="row buyAndDetails">
              <a href="javascript:void(0)" class="col-md-2 details"><i class="fas fa-plus-circle" id="Cmais"></i>DETALHES</a>
              <a href="javascript:void(0)" class="col-md-6 buy" id="btn-buy"><i class="fas fa-shopping-cart"></i>COMPRAR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <!-- meus scripts -->

  <!-- jquery, bs4 e popper -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>