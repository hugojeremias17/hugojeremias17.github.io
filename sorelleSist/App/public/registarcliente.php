<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<style>

.container {
            display: block;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 100%;
            margin-left: 90px;
            margin-top: 30px;
           
        }

form {
            display: block;
            flex-direction: column;
            gap: 1px;
            width: 300px;
            
    }

body{
    background-image: url(Assets/img/toalha\ laranja.jpg);
    background-size: 900px;
}

h4{
    color:white;
}

label{
    color: white;
}





</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="../public/paginicial.php">
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



<form action="../model/cadastrarCliente.php" method="POST">
     <div class="container">
     <h4> Registe um novo Cliente</h4>
         <input type="hidden" name="acao" value="cadastrar">
         <div class="mb-3">
             <label> Nome</label>
             <input type="text" name="nomeUser" class="form-control" required>
         </div>
         <div class="mb-3">
             <label> Telefone</label>
             <input type="tel" name="telUser" class="form-control" required>
         </div>
         <div class = "mb-3">
             <label> Email</label>
             <input type="email" name="emailUser" class="form-control" required>
         </div>
         <div class="mb-3">
             <label> Morada</label>
             <input type="text" name="moradaUser" class="form-control" required>
         </div>
         <div class=""mb-3>
             <label> Data</label>
             <input type="date" name="datUser" class="form-control" required>
         </div>
        <br>
         <div class="mb-3">
         <button style="width: 270px;" type="submit" class="btn btn-primary"> Registar
         </button>
         </div>
     </div>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>       
</body>
</html>