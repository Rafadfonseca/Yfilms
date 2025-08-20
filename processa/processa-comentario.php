<?php
// include de conexao 
include_once '../includes/conexao.php';

// captura os dados
$acao = $_REQUEST['acao'];

$comentario = $_POST['comentario'];

// INSERT INTO tabela (CAMPOS, CAMPOS) VALUES(VALORES,VALORES)
$sql = "INSERT INTO comentarios (comentario)
VALUES('$comentario')";
$resultado = $conn->query($sql);
header("location: ../filmes.php");
?>