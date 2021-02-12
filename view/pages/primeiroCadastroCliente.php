<?php
  session_start();
      // VERIFICA SE HÁ ERROS
      if(isset($_SESSION['error'])){

        ?>
        <script>
          window.onload = function carregar(){ 
            document.getElementsByClassName('container-content')[0].classList.remove('locked')
            document.getElementsByClassName('text-boas')[0].classList.add('locked')
          }
        </script>
        <?php
        $erro = $_SESSION['error'];
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $cpf = $_SESSION['cpf'];
        $celular = $_SESSION['celular'];
        $nascimento = $_SESSION['dataNascimento'];

        // echo "<br> $erro <br> $nome <br> $email<br> $cpf<br>$celular<br>$nascimento";
        switch($erro){
          case 1:
            // ERRO DE NOME INVALIDO
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var nome = document.getElementsByTagName('input')[0];
              nome.style.borderBottom = '2px solid red';
              nome.style.background = 'rgb(255, 219, 219)'
            });
              
            </script>
        <?php    
            break;

          case 2:
            // ERRO DE EMAIL INVALIDO
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var email = document.getElementsByTagName('input')[1];
              email.style.borderBottom = '2px solid red';
              email.style.background = 'rgb(255, 219, 219)'
            });
            </script>
            <?php
            break;

          case 3:
            // ERRO DE CPF INVALIDO
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var cpf = document.getElementsByTagName('input')[2];
              cpf.style.borderBottom = '2px solid red';
              cpf.style.background = 'rgb(255, 219, 219)'
            });
            </script>
            <?php
            break;
          
          case 4:
            // ERRO DE DATA DE NASCIMENTO INVALIDA
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var nascimento = document.getElementsByTagName('input')[3];
              nascimento.style.borderBottom = '2px solid red';
              nascimento.style.background = 'rgb(255, 219, 219)'
            });
            </script>
            <?php
            break;

          case 5:
            // ERRO DE NUMERO DE CELULAR INVALIDO
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var celular = document.getElementsByTagName('input')[4];
              celular.style.borderBottom = '2px solid red';
              celular.style.background = 'rgb(255, 219, 219)'
            });
            </script>
            <?php
            break;

          case 6:
            // ERRO DE NUMERO DE CELULAR INVALIDO
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var cpf = document.getElementsByTagName('input')[2];
              cpf.style.borderBottom = '2px solid red';
              cpf.style.background = 'rgb(255, 219, 219)'
            });
            </script>
            <?php
            $msg = "<div class='container msg-error'>
                      <div class='row'>
                        <div class='col-md-12 mt-md-3 text-center'>
                          <p>O CPF <b class='wrong-cpf'>$cpf</b> e/ou o e-mail <b class='wrong-cpf'>$email</b> já estão vinculados a uma conta em nossa base de dados!</p>
                          <p class='msg-suporte'>Caso você ache que essa mensagem não deveria aparecer entre em contato com o nosso <a href='javascript:void()' class='link-suporte'>suporte</a>!</p>
                        </div>
                      </div>
                    </div>";
            break; 
        }// FECHAMENTO DA ESTRUTURA DE DECISÃO SWITCH
      ?>
          

      <?php
      session_destroy();
      }// FECHAMENTO DA ESTRUTURA DE DECISÃO 
      ?>
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
      <div class="container-content locked">
        <div class="container">
          <div class="row">
            
            <?php 
            if(isset($nome) || isset($email) || isset($cpf) || isset($nascimento) || isset($celular)){
              switch($erro){
                case 6:
                  echo $msg;
                  break;
              }
              ?>
              
              <div class="col-md-6 form-col mt-md-5">
              <p class="text-center"><h4 class="text-center mb-md-4">CADASTRO DE NOVO CLIENTE</h4></p>
                <form action="../../controler/cadastroInit.php" method="post">
                  <input type="text" name="nome" value="<?= $nome ?>" placeholder="Nome Completo" class="inputText">
                  <input type="email" name="email" value="<?= $email ?>" placeholder="E-mail" class="inputText mt-5">
                  <input type="text" name="cpf" value="<?= $cpf ?>" placeholder="CPF" id="cpf" class="smallInput inputText mt-5" maxlength="14">
                  <input type="text" id="nascimento" id="dataNascimento" maxlength="10" name="nascimento" value="<?= $nascimento ?>" class="dataNascimento date mt-5">
                  <input type="text" id="celular" name="celular" value="<?= $celular ?>" placeholder="Celular ddd + numero" maxlength="15" class="mt-5 smallInput celular">
                  <div class="row mt-5">
                    <button type="submit" name="btn-cadastrar-first" class="botao-cadastrar ms-md-3 col-md-12"><span class="btnText">PRÓXIMO <i class="fas fa-angle-right"></i></span><i class="wrongIcon fas fa-angle-right"></i></button>
                  </div>
                </form>
              </div>
              <?php
            }else{ // FECHAMENTO DO IF
              ?>
            <div class="col-md-6 form-col mt-md-5">
            <p class="text-center"><h4 class="text-center mb-md-4">CADASTRO DE NOVO CLIENTE</h4></p>
              <form action="../../controler/cadastroInit.php" method="post">
                <input type="text" name="nome" placeholder="Nome Completo" class="inputText ms-md-3">
                <input type="email" name="email" placeholder="E-mail" class="inputText ms-md-3 mt-5">
                <input type="text" name="cpf" placeholder="CPF" id="cpf" class="smallInput inputText ms-md-3 mt-5" maxlength="14">
                <input type="text" name="nascimento" id="dataNascimento" placeholder="Data de Nascimento" class="inputText dataNascimento ms-md-3 mt-5">
                <input type="text" id="celular" name="celular" placeholder="Celular ddd + numero" maxlength="15" class="mt-5 smallInput ms-md-3">
                <div class="row mt-5 row-button">
                  <button type="submit" name="btn-cadastrar-first" class="botao-cadastrar ms-md-3 col-md-12"><span class="btnText">PRÓXIMO <i class="fas fa-angle-right"></i></span><i class="wrongIcon fas fa-angle-right"></i></button>
                </div>
              </form>
            </div>
            <?php
            }// FECHAMENTE DO ELSE
            ?>
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
    <div class="row row-boas-vindas">
        <div class="col-md-6 boas-vindas">
          <p class="text-justify text-boas">Para ser um cliente PoliGrill e se tornar um mestre no churrasco, faça já o seu cadastro ou entre em uma conta já existente</p>
          <button class="btn-iniciar">Cadastrar-se</button>
          <button class="btn-logar mt-md-3">Login</button>
        </div>
      </div>
  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
  </body>
</html>