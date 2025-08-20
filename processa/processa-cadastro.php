<?php
// include de conexao 
include_once '../includes/conexao.php';

// captura os dados
$acao = $_REQUEST['acao'];

$email = $_POST['email'];
$cpf = $_POST['cpf'];
$nomecompleto = $_POST['nomecompleto'];
$datanascimento = $_POST['datanascimento'];
$nomeusuario = $_POST['nomeusuario'];
$senha = $_POST['senha'];

// INSERT INTO tabela (CAMPOS, CAMPOS) VALUES(VALORES,VALORES)
$sql = "INSERT INTO usuarios (email, cpf, nomecompleto, datanascimento, nomeusuario, senha)
VALUES('$email', $cpf, '$nomecompleto', '$datanascimento','$nomeusuario', '$senha')";
$resultado = $conn->query($sql);
header("location: ../login.php?cad=ok");
?>