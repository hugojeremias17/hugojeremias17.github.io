<?php 

include"../config/conexao.php";

$nomeCliente = $_POST ['nomeUser'];
$telCliente = $_POST ['telUser'];
$moradaCliente = $_POST ['moradaUser'];
$dataCliente = $_POST ['datUser'];

$ql = "";
$ql = "INSERT INTO clientes (nomeCliente, telCliente, moradaCliente, dataCliente) VALUES ('$nomeCliente', '$telCliente','$moradaCliente', '$dataCliente')";

if ( $conn->query($ql) === TRUE) 
{
    echo "Usuário foi registado com Sucesso";
 
}

else 
{
    echo "Erro:".$sql. "<br>". $conn->error;
}
?>

