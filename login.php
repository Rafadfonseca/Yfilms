<?php
include_once './includes/conexao.php';
$pagina = 'login';
include_once './includes/header-login.php';
?>

<body>
    <div id="paginalogin">

    <div id="carddelogin">
        <form action="./processa-login.php" method="post">
            <div id="titulo">
                <h1>Faça seu login</h1>
                <a class="bt-sair" href="./index.php">x</a>
            </div>
            <div id="informacoes">
                <p class="texto">E-MAIL:</p>
                <input type="text" class="preencher">
                <div class="linha"></div>
                <p class="texto">SENHA:</p>
                <input type="text" class="preencher">
                <div class="linha"></div>
                <input type="submit" class="botao" id="entrar" value="ENTRAR"></input>
                <div id="linhascomou">
                <div class="linhapequena"></div>
                <p id="ou">OU</p>
                <div class="linhapequena"></div>
                </div>
                <a class="botao" id="querocadastrar" href="./cadastrar.php">QUERO ME CADASTRAR</a>
            </div>
        </form>
    </div>
    </div>
</body>
</html>