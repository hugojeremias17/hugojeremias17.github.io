<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sorelle_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die ("Conexão Falhada:".$conn->connect_error);
}

?>