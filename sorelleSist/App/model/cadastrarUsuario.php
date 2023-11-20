<?php
include "../config/conexao.php";

$email = $_POST ['emailUser'];
$senha = $_POST ['passUser'];



$ql = "";
$ql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";

if ( $conn->query($ql) === TRUE) 
{
    echo "Usuário foi cadastrado com sucesso ";
 
}

else 
{
    echo "Erro:".$sql. "<br>". $conn->error;
}
?>