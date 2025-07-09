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
      <input type="hidden" name="acao" value="salvar">
      <input type="hidden" name="id" value="<?php echo $usuario['usuarioID']; ?>">
        <div id="titulo">
            <h1>Cadastre-se</h1>
            <a class="bt-sair" href="./index.php" >x</a>
        </div>
        
        <div id="informacoes">
            <p class="texto">E-MAIL:</p>
            <input type="text" class="preencher" name="email" value="<?php echo $usuario['email']; ?>" required>
            <div class="linha"></div>
            <p class="texto">CPF:</p>
            <input type="number" class="preencher" name="cpf" value="<?php echo $usuario['cpf']; ?>" required>
            <div class="linha"></div>
            <p class="texto">NOME COMPLETO:</p>
            <input type="text" class="preencher" name="nomecompleto" value="<?php echo $usuario['nomecompleto']; ?>" required>
            <div class="linha"></div>
            <p class="texto">DATA DE NASCIMENTO:</p>
            <input type="date" class="preencher" name="datanascimento" value="<?php echo $usuario['datanascimento']; ?>" required>
            <div class="linha"></div>
            <p class="texto">NOME DE USUÁRIO:</p>
            <input type="text" class="preencher" name="nomeusuario" value="<?php echo $usuario['nomeusuario']; ?>" required>
            <div class="linha"></div>
            <p class="texto">SENHA:</p>
            <input type="text" class="preencher" name="senha" value="<?php echo $usuario['senha']; ?>" required>
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