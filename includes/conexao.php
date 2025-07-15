<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "yfilms";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $database);

// Checando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$atualizado = date("YmdHis").rand(0,999999999999);
$banco = "yfilms"

?>