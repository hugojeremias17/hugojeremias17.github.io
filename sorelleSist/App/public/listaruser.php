<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Lista de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>

</style>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="paginicial.php">
        <img src="Assets/img/sorellelogo copiar.png" width="50" height="50" class="d-inline-block align-top" alt="">
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="registarcliente.php"> Registar novo Cliente<span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaruser.php"> Listar novo Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
   </div>  

</nav>
<br>
<h3 style="text-align: center;"> Veja os Seus clientes</h3>

<div style="margin-top: 50px;">
    <?php
    
     include "../config/conexao.php";
    
      $sql = "SELECT * FROM clientes";
      $res = $conn -> query($sql);
      $qtd = $res -> num_rows;
    
      if( $qtd > 0){
        print "<table  class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Id</th>";
        print "<th>Nome  </th>";
        print "<th>Telefone </th>";
        print "<th>Morada </th>";
        print "<th>Data </th>";
        print "<th>acções</th>";
        while ($row = $res ->fetch_object()){
          print "<tr>";
          print "<td>$row->idCliente</td>";
          print "<td>$row->nomeCliente</td>";
          print "<td>$row->telCliente</td>";
          print "<td>$row->moradaCliente</td>";
          print "<td>$row->dataCliente</td>";
    
          print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->idCliente."';\" class='btn btn-succes'> Editar </button>
                    <button class='btn btn-danger'> Apagar </button>
    
                </td>";
          }
        print "</table>";}
    
    
    ?>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>       
</body>
</html>