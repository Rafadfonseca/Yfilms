<?php
include_once './includes/conexao.php';
$pagina = 'cadastrar';
include_once './includes/header-login.php';

$usuario = array(
  'usuarioID' => '',
  'email' => '',
  'cpf' => '',
  'nomecompleto' => '',
  'datanascimento' => '',
  'nomeusuario' => '',
  'senha' => ''
);

if (!empty($_GET['id'])){
  $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuarioID = {$_GET['id']}");
  $usuario = mysqli_fetch_assoc($result) ?: $usuario;
}
?>
<body>
    <div id="paginalogin">

    <div id="carddelogin">
        <form action="./processa-cadastro.php" method="post">
        <div id="titulo">
            <h1>Cadastre-se</h1>
            <a class="bt-sair" href="./index.php" >x</a>
        </div>
        
        <div id="informacoes">
            <p class="texto">E-MAIL:</p>
            <input type="text" class="preencher">
            <div class="linha"></div>
            <p class="texto">CPF:</p>
            <input type="text" class="preencher">
            <div class="linha"></div>
            <p class="texto">NOME COMPLETO:</p>
            <input type="text" class="preencher">
            <div class="linha"></div>
            <p class="texto">DATA DE NASCIMENTO:</p>
            <input type="text" class="preencher">
            <div class="linha"></div>
            <p class="texto">NOME DE USUÁRIO:</p>
            <input type="text" class="preencher">
            <div class="linha"></div>
            <p class="texto">SENHA:</p>
            <input type="text" class="preencher">
            <div class="linha"></div>
                <input type="submit" class="botao" id="entrar" value="CADASTRAR"></input>
                <div id="linhascomou">
                <div class="linhapequena"></div>
                <p id="ou">OU</p>
                <div class="linhapequena"></div>
                </div>
                <a class="botao" id="querocadastrar" href="./login.php">QUERO FAZER LOGIN</a>
            </div>
        </form>
    </div>
    </div>
</body>
</html>