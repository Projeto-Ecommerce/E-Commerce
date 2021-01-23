<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../css/cadastrarCliente.css">
      <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src="../javascript/jQuery/jquery-3.5.1.min.js"></script>
    <script src="../javascript/jQuery/jquey.mask.js"></script>

    <script>
      $(document).ready(function(){

        jQuery(function($){
        $("#cpf").mask("999.999.999-99");

      });

    });
      
    </script>
    <title>Novo Usuario</title>
  </head>
  <body>

    <!--   CADASTRO     -->

    <div class="container-block">
      <div class="container-content">
        <div class="container">
          <div class="row">

            <div class="col-md-6 form-col mt-5">
              <form action="#" method="post">
                <input type="text" name="nome" placeholder="Nome Completo" class="inputText">
                <input type="email" name="email" placeholder="E-mail" class="inputText mt-5">
                <input type="text" name="cpf" placeholder="CPF" id="cpf" class="smallInput inputText mt-5" maxlength="14">
                <input type="date" name="nascimento" class="dataNascimento mt-5">
                <input type="text" name="celular" placeholder="Celular" class="mt-5 smallInput">
                <div class="row mt-5">
                  <button type="submit" name="btn-cadastrar-first" class="botao-cadastrar"><span class="btnText">PRÓXIMO <i class="fas fa-angle-right"></i></span><i class="wrongIcon fas fa-angle-right"></i></button>
                </div>
              </form>
            </div>

            <div class="col-md-6 mt-5">
              <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/banner-profissional-v2.1.jpg" class="d-block w-100" alt="Linha Profissional">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/banner-residencial-v2.1.jpg" class="d-block w-100" alt="Linha Residencial">
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  </body>
</html>