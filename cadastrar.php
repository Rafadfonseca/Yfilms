<?php
include_once './includes/conexao.php';
$pagina = 'cadastrar';
include_once './includes/header-login.php';
?>
<body>
    <div id="paginalogin">

    <div id="carddelogin">
        <div id="titulo">
            <h1>Cadastre-se</h1>
        </div>
        <div id="informacoes">
            <p class="texto">E-MAIL:</p>
            <input type="text">
            <div class="linha"></div>
            <p class="texto">CPF:</p>
            <input type="text">
            <div class="linha"></div>
            <p class="texto">NOME COMPLETO:</p>
            <input type="text">
            <div class="linha"></div>
            <p class="texto">DATA DE NASCIMENTO:</p>
            <input type="text">
            <div class="linha"></div>
            <p class="texto">NOME DE USUÁRIO:</p>
            <input type="text">
            <div class="linha"></div>
            <p class="texto">SENHA:</p>
            <input type="text">
            <div class="linha"></div>
            <button class="botao" id="entrar">CADASTRAR</button>
            <div id="linhascomou">
            <div class="linhapequena"></div>
            <p id="ou">OU</p>
            <div class="linhapequena"></div>
            </div>
            <button class="botao" id="querocadastrar">QUERO FAZER LOGIN</button>
        </div>
    </div>
    </div>
</body>
</html>