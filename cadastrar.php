<?php
include_once './includes/conexao.php';
$pagina = 'cadastrar';
include_once './includes/header-login.php';
?>
<body>
    <div id="paginalogin">

    <div id="carddelogin">
        <form action="./processa-login.php" method="post">
        <div id="titulo">
            <h1>Cadastre-se</h1>
        </div>
        <div id="sair">
            <i class="fa-solid fa-circle-chevron-right"></i>
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