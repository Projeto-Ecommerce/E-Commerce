<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="../javascript/jQuery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../javascript/jQuery/bootstrap.min.js"></script>
		<script type="text/javascript" src="../javascript/jQuery/jquery.mask.min.js"></script>	

    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../css/segundoCadastrarCliente.css">
    <!-- SCRIPT -->
    <script src="../javascript/segundoCadastroCliente.js"></script>
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
          <div class="col-md-6 mt-5">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Cadastro de RG
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <!-- ROW 1 BODY 1 -->
                    <div class="ms-md-3 col-md-12 col-sm-12">
                        <input type="hidden" id="idCliente" value="IdCliente">
                        <input type="hidden" id="nome" value="nomeCliente">
                      <div class="row">
                      <!-- RG -->
                      <div class="col-md-6 col-sm-12">
                        <label for="rg" class="inputLabel">Numero do Documento:</label>
                        <input type="text" name="rg" class="mt-1 inputText" id="rg" placeholder="RG">
                      </div>                
                      <!-- ORGÃO EMISSOR -->
                        <div class="col-md-6 col-sm-12">
                          <label for="orgemissor" class="inputLabel">Orgão Emissor:</label>
                          <select name="orgemissor" id="orgemissor" class="mt-1 inputText">
                              <option value="---" selected>---</option>
                            <optgroup label="Orgãos Emissores">
                                <option value="SSP" id='orgemissor'>SSP</option>
                                <option value="Cartório Civil" id='orgemissor'>Cartório Civil</option> 
                                <option value="Polícia Federal" id='orgemissor'>Polícia Federal</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>  
                    </div>
                    <!-- FINAL ROW 1 BODY 1 -->    

                    <!-- ROW 2 BODY 1 -->
                    <div class="ms-md-3 mt-md-3 col-md-12 col-sm-12">
                        <input type="hidden" id="idCliente" value="IdCliente">
                        <input type="hidden" id="nome" value="nomeCliente">
                      <div class="row">
                      <!-- RG -->
                      <div class="col-md-6 col-sm-12">
                        <label for="dataEmissao" class="inputLabel">Data de Emissão:</label>
                        <input type="text" name="dataEmissao" class="mt-1 inputText" id="data" placeholder="dd/mm/aaaa">
                      </div>                
                      <!-- ORGÃO EMISSOR -->
                        <div class="col-md-6 col-sm-12">
                          <label for="estEmissor" class="inputLabel">Estado de Emissão:</label>
                          <select name="estEmissor" id='estEmissor' class="mt-1 inputText">
                              <option value="---" selected>---</option>
                            <optgroup label="Orgãos Emissores">
                                <option value="SP" id='estEmissor'>SP</option>
                                <option value="Cartório Civil" id='estEmissor'>Cartório Civil</option> 
                                <option value="Polícia Federal" id='estEmissor'>Polícia Federal</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>  
                    </div>
                    <!-- FINAL ROW 2 BODY 1 -->
                  </div>
                </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Cadastrar Endereço
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="col-md-12">
                      <div class="row">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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