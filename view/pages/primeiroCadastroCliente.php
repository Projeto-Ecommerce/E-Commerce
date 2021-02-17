<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="../javascript/jQuery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../javascript/jQuery/bootstrap.min.js"></script>
		<script type="text/javascript" src="../javascript/jQuery/jquery.mask.min.js"></script>	
	
    <script src="../javascript/cadastroCliente.js">
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../css/cadastrarCliente.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
    <title>Novo Usuario</title>
  </head>
  <body>

    <!--   CADASTRO     -->

    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="../../index.php"><img src="../images/header_logo.png" class="logo" alt="Banner Logo"></a>

  </div>
</nav>
    <div class="container-block">
      <div class="row row-error">
        <div class="container-error">
          <div class="container">
            <!-- <p class="erro-cpf">O CPF <a class="var-erro text-center">558.160.068-60</a> já esta cadastrado em nossa base de dados</p> -->
              <p class="erro-email">O E-mail <a class="var-erro"> viniciustestapassos@gmail.com</a> já esta cadastrado em nossa base de dados</p>
          </div>
        </div>
      </div>
      <div class="container-content">
        <div class="container">
          <div class="row">
          
            <div class="col-md-6 form-col mt-md-5">
            <p class="text-center"><h4 class="text-center mb-md-4">CADASTRO DE NOVO CLIENTE</h4></p>
              <form action="" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inputText ms-md-3">
                <input type="email" name="email" placeholder="E-mail" id="email" class="inputText ms-md-3 mt-5">
                <input type="text" name="cpf" placeholder="CPF" id="cpf" class="smallInput inputText ms-md-3 mt-5" maxlength="14">
                <input type="text" name="nascimento" id="dataNascimento" placeholder="Data de Nascimento" class="inputText dataNascimento ms-md-3 mt-5">
                <input type="text" id="celular" name="celular" placeholder="Celular ddd + numero" maxlength="15" class="mt-5 smallInput ms-md-3">
                <button type="submit" disabled name="btn-cadastrar-first" id="btn-cadastrar" class="botao-cadastrar ms-md-3 col-md-12 disabled"><span class="btnText">PRÓXIMO <i class="fas fa-angle-right"></i></span></button>
                
              </form>
            </div>

            <div class="col-md-6 mt-5">
              <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../images/banner-profissional-v2.1.jpg" class="d-block w-100 carouselImg" alt="Linha Profissional">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/banner-residencial-v2.1.jpg" class="d-block w-100 carouselImg" alt="Linha Residencial">
                  </div>
                </div>
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