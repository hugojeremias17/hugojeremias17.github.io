<?php
include "../config/conexao.php";

$email = $_POST ['emailInput'];
$senha = $_POST ['senhaInput'];
$access_denied = "Você precisa estar logado para acessar essa página.";

$sql = "SELECT * FROM usuario WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Usuário existe";
    header('Location:../public/paginicial.php');
} else {
    echo htmlspecialchars($access_denied);
}

$conn->close();
   
?> 

