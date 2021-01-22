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

    
    <title>Novo Usuario</title>
  </head>
  <body>

    <!--   CADASTRO     -->

    <div class="container-block">
      <div class="container-content">
        <div class="container">
          <div class="col-md-6 form-col mt-5">
            <form action="#" method="post">
              <input type="text" name="nome" placeholder="Nome Completo" class="inputText">
              <input type="email" name="email" placeholder="E-mail" id="cpf" class="inputText mt-5">
              <input type="text" name="cpf" placeholder="CPF" class="inpuText">
            </form>
          </div>
          <div class="col-md-6">
          
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>

    <script>
      jQuery(function($){
        $("#cpf").mask("99/99/9999");

      });
    </script>
  </body>
</html>