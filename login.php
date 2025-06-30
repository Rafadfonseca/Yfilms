<?php
include_once './includes/conexao.php';
$pagina = 'login';
include_once './includes/header-login.php';
?>
<body>
    <div id="paginalogin">

    <div id="carddelogin">
        <div id="titulo">
            <h1>Faça seu login</h1>
        </div>
        <div id="informacoes">
            <p class="texto">E-MAIL:</p>
            <input type="text">
            <div class="linha"></div>
            <p class="texto">SENHA:</p>
            <input type="text">
            <div class="linha"></div>
            <button class="botao" id="entrar">ENTRAR</button>
            <div id="linhascomou">
            <div class="linhapequena"></div>
            <p id="ou">OU</p>
            <div class="linhapequena"></div>
            </div>
            <button class="botao" id="querocadastrar">QUERO ME CADASTRAR</button>
        </div>
    </div>
    </div>
</body>
</html>