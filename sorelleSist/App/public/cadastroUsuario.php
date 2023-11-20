<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/Assets/bootstrap/css/bootstrap.css">
    <title>Cadastrar</title>
</head>
<body>
<form action="../model/cadastrarUsuario.php" method="POST">
     <input type="hidden" name="acao" value="cadastrar">

     <div class = "mb-3">
         <label> Email</label>
         <input type="email" name="emailUser" class="form-control" required>

     <div class="mb-3">
         <label> Senha</label>
         <input type="password" name="passUser" class="form-control" required>
     </div>
     <div class="mb-3">
     <button type="submit" class="btn btn-primary"> Enviar
     </button>
     </div>
</form>

<script src="Assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>