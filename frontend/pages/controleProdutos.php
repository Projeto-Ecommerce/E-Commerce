<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once ('../../backend/share/head.php')?>
  <link rel="stylesheet" href="../../frontend/css/controleProdutos.css">
  <link rel="stylesheet" href="../../frontend/css/navbarDesktop.css">
  <link rel="stylesheet" href="../../frontend/css/navbarMobile.css">  
    <title>Controle de Produtos</title>
</head>
<body>
    <?php include_once ('../../backend/share/navbar.php') ?>
    <div class="container">
        <div class="row">
            <div class="box col-4">
                <a href="#" class="btn btn-white btn-animation-1" onclick="fetchContent(this)" a-view="add" a-folder="subProdutos" >Adicionar Produtos</a> 
            </div>
            <div class="box col-4">
                <a href="#" class="btn btn-white btn-animation-1" onclick="fetchContent(this)" a-view="remove" a-folder="subProdutos" >Tirar do Estoque</a> 
            </div>
            <div class="box col-4">
                <a href="#" class="btn btn-white btn-animation-1" onclick="fetchContent(this)" a-view="edit" a-folder="subProdutos" >Editar Produtos</a> 
            </div>
        </div>
        <div class="row">
            <div class="content" id="ajax-content">

            </div>
        </div>
    </div>
    
    <script src="../javascript/controlePDT.js"></script>
    <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- table cdn -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</body>
</html>