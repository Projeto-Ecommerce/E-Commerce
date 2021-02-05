<?php
  session_start();

      // VERIFICA SE HÁ ERROS
      if(isset($_SESSION['error'])){

        $erro = $_SESSION['error'];

        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $cpf = $_SESSION['cpf'];
        $celular = $_SESSION['celular'];
        $nascimento = $_SESSION['dataNascimento'];

        echo "<br> $erro <br> $nome <br> $email<br> $cpf<br>$celular<br>$nascimento";
        switch($erro){
          case 1:
            // ERRO DE NOME INVALIDO
            ?>
            <script>
            addEventListener('load', function mostrarErro(){
              var nome = document.getElementsByTagName('input')[0];
              nome.style.borderBottom = '2px solid red';
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
            });
            </script>
            <?php
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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../css/cadastrarCliente.css">
      <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    addEventListener('load', function carregarMask(){
      addEventListener('keydown', function maskDown(){
        if(document.getElementById('celular').value.length == 0){
          document.getElementById('celular').value += "(";
        }
      })
      addEventListener('keyup', function mask(){

        if(document.getElementById('cpf').value.length == 3 || document.getElementById('cpf').value.length == 7){
          document.getElementById('cpf').value += '.';
        }
        if(document.getElementById('cpf').value.length == 11){
          document.getElementById('cpf').value += '-';
        }
  
        if(document.getElementById('celular').value.length == 3){
          document.getElementById('celular').value += ") ";
        }

        if(document.getElementById('celular').value.length == 10){
          document.getElementById('celular').value += '-';
        }
      })
    })
  </script>
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
      <div class="container-content">
        <div class="container">
          <div class="row">

            <?php if(isset($nome) || isset($email) || isset($cpf) || isset($nascimento) || isset($celular)){
              ?>
              <div class="col-md-6 form-col mt-md-5">
                <form action="../../controler/cadastroInit.php" method="post">
                  <input type="text" name="nome" value="<?= $nome ?>" placeholder="Nome Completo" class="inputText">
                  <input type="email" name="email" value="<?= $email ?>" placeholder="E-mail" class="inputText mt-5">
                  <input type="text" name="cpf" value="<?= $cpf ?>" placeholder="CPF" id="cpf" class="smallInput inputText mt-5" maxlength="14">
                  <input type="date" name="nascimento" value="<?= $nascimento ?>" class="dataNascimento mt-5">
                  <input type="text" id="celular" name="celular" value="<?= $celular ?>" placeholder="Celular ddd + numero" maxlength="15" class="mt-5 smallInput celular">
                  <div class="row mt-5">
                    <button type="submit" name="btn-cadastrar-first" class="botao-cadastrar"><span class="btnText">PRÓXIMO <i class="fas fa-angle-right"></i></span><i class="wrongIcon fas fa-angle-right"></i></button>
                  </div>
                </form>
              </div>
              <?php
            }else{ // FECHAMENTO DO IF
              ?>
            <div class="col-md-6 form-col mt-md-5">
              <form action="../../controler/cadastroInit.php" method="post">
                <input type="text" name="nome" placeholder="Nome Completo" class="inputText">
                <input type="email" name="email" placeholder="E-mail" class="inputText mt-5">
                <input type="text" name="cpf" placeholder="CPF" id="cpf" class="smallInput inputText mt-5" maxlength="14">
                <input type="date" name="nascimento" class="dataNascimento mt-5">
                <input type="text" id="celular" name="celular" placeholder="Celular ddd + numero" maxlength="15" class="mt-5 smallInput">
                <div class="row mt-5">
                  <button type="submit" name="btn-cadastrar-first" class="botao-cadastrar"><span class="btnText">PRÓXIMO <i class="fas fa-angle-right"></i></span><i class="wrongIcon fas fa-angle-right"></i></button>
                </div>
              </form>
            </div>
            <?php
            }// FECHAMENTE DO ELSE
            ?>

          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      
  </body>
</html>