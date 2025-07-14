<?php
session_start();
include_once("../includes/conexao.php")

$usuario = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = $conn->query($sql);
$dados = mysqli_fetch_assoc($resultado);
if (!empty($dados)) {
    $_SESSION['email'] = "agente007";
    header("location: ../index.php")
} else {
    header("location: ../login.php")
}
?>