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
    <link rel="stylesheet" href="../css/segundoCadastrarCliente.css">
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
      <div class="container-content">
        <div class="container">
          <div class="row forms">
            
            <!-- SEGUNDA PARTE DO CADASTRO DE CLIENTE -->
            <div class="ms-3 col-md-5">
              <input type="hidden" id="idCliente" value="IdCliente">
              <input type="hidden" id="nome" value="nomeCliente">
              <div class="row mt-md-5">
              <!-- RG -->
                <input type="text" class="inputText" id="rg" placeholder="RG">
              <!-- ORGÃO EMISSOR -->

              <!-- ESTADO DE EMISSÃO -->

              <!-- DATA DE EMISSÃO -->
              </div>
              <div class="row-radios mt-md-5">
                <div class="col-md-12 col-radios">
                  <label for="masculino">M
                    <input type="radio" name="sexo" value="F" id="masculino" class="inputRadio">
                  </label>
                  <label for="feminino" class="ms-2">F
                    <input type="radio" name="sexo" value="M" id="feminino" class="inputRadio">
                  </label>
                </div>
              </div>
              <div class="row"></div>              
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
  </body>
</html>