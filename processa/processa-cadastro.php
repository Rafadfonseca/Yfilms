<?php
include_once '../include/cadastrar.php';
include_once '../include/conexao.php'

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao) {
    case 'cadastrar':
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $nomecompleto = $_POST['nomecompleto'];
        $datanascimento = $_POST['datanascimento'];
        $nomeusuario = $_POST['nomeusuario'];
        $senha = $_POST['senha'];
        if (!empty($id)){
            $sql = "INSERT INTO usuarios SET email = '$email', cpf = $cpf, nomecompleto = '$nomecompleto', 
            datanascimento = '$datanascimento', nomeusuario = '$nomeusuario', senha = '$senha'  WHERE usuarioID = $id";
        }
        break;}
?>