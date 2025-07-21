<?php
include_once './includes/conexao.php';
$pagina = 'filmes';

  $comentario = array(
    'comentarioId' => '',
    'comentario' => '',
    'usuarioID' => ''
  );

if (!empty($_GET['id'])){
  $result = mysqli_query($conn, "SELECT * FROM comentarios WHERE comentarioID = {$_GET['id']}");
  $comentario = mysqli_fetch_assoc($result) ?: $comentario;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/filmes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"><style>
      @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Questrial&family=Shrikhand&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Questrial&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Maven+Pro:wght@400..900&family=Questrial&family=Shrikhand&display=swap');
    </style>
    <title>Filmes Recomendados</title>
</head>
<body>
  <header>
    <div id="first">
      <h1>Filmes <br> Recomendados</h1>
    </div>
  </header>
  <main>
    <div class="accordion">

          <div class="accordion-content">
              <div class="header">
                  <img class="capas" src="imgs/img/clcapa.png" alt="">
                  <div class="textheader">
                      <span class="title">Clube da Luta</span>
                      <p class="sinop">Um homem deprimido que sofre de insônia conhece um estranho vendedor chamado Tyler Durden e se vê morando em uma casa suja depois que seu perfeito apartamento é destruído. A dupla forma um clube com regras rígidas onde homens lutam.</p>
                  </div>

                  <div class="flecha">
                      <i class="fa-solid fa-plus"></i>
                  </div>
              </div>
              <div class="descricao">
                  <p class="description1"> <span class="firstp">O </span> filme "Clube da Luta" de 1999 acompanha a história de um homem monótono, sem relacionamentos 
                      ou amizades, cujo cotidiano muda após conhecer um homem em um avião. Eles criam um clube de luta, ele se envolve 
                      com uma mulher, perde o emprego, passa a morar com o amigo e adquire novos vínculos. A narrativa destaca a mudança 
                      na paleta de cores do filme que reflete o estado emocional do protagonista: inicialmente tons azuis e verdes que 
                      transmitem calma, estabilidade e tristeza, representam sua rotina monótona. A partir do encontro com o outro homem, 
                      aparecem cores vermelhas, simbolizando desejo, energia, perigo e violência, que se intensificam conforme ele se 
                      envolve mais com esse personagem</p>
                  <p class="description"><span class="firstp">Com </span> o tempo, a paleta evolui para tons quentes como laranja e amarelo, indicando sua 
                      transformação emocional e perda de racionalidade, especialmente após uma cena decisiva em que ele escolhe uma porta 
                      com luz amarelada, simbolizando sua entrada em um estado impulsivo. Ao final, uma cena marcada pelo retorno ao azul 
                      traz à tona sentimentos de tristeza e racionalidade, concluindo a narrativa sobre as mudanças emocionais do 
                      protagonista e a influência das cores para compreender sua trajetória.</p>
                  <img class="primeiraft" src="imgs/img/clfoto1.png" alt="">
                  <img src="imgs/img/clfoto2.png" alt="">
                  <img src="imgs/img/clfoto3.png" alt="">

                  <div class="comentario">
                      <h2>Você percebeu mais alguma coisa no filme?</h2>
                      <form action="./processa/processa-comentario.php" method="post">
                        <input type="hidden" name="acao" value="salvar">
                        <input type="hidden" name="id" value="<?php echo $comentarios['comentarioID']; ?>">
                        <input id="placeholder-text" type="text" placeholder="Escreva um comentário" name="comentario" value="<?php echo $comentario['comentario']; ?>" required>
                        <input id="env" type="submit" class="myButton" value="enviar"></input>
                      </form>

                  </div>
              </div>
          </div>

          <div class="accordion-content">
              <div class="header">
                  <img class="capas" src="imgs/img/mkcapa.png" alt="">
                  <div class="textheader">
                      <span class="title">Moonrise Kingdom</span>
                      <p class="sinop">Em 1965, residentes de uma ilha formam uma comunidade aparentemente imune aos males do resto do 
                          mundo.Os adolescentes Sam e Suzy se apaixonam e decidem fugir antes da chegada de uma violenta tempestade que 
                          ameaça a região.</p>
                  </div>

                  <div class="flecha">
                      <i class="fa-solid fa-plus"></i>
                  </div>
              </div>
              <div class="descricao">
                  <p class="description1"> <span class="firstp">Moonrise </span> Kingdom é um filme de 2012 dirigido por Wes Anderson, 
                      que utiliza uma paleta de cores predominante amarela para transmitir sentimentos de nostalgia, alegria e otimismo, 
                      além de refletir o cenário de 1965. As cores também representam as emoções dos personagens: amarelo para a juventude
                      e imaturidade de Sam, e vermelho para a paixão e maturidade de Suzy. Quando os protagonistas se apaixonam, 
                      predominam cenas em rosa, simbolizando inocência e romance. Durante sua fuga, o uso do azul e cinza indica tristeza,
                      e o mundo adulto, enquanto momentos de tensão e mistério são ilustrados pelo uso de cores acinzentadas e 
                      escuras, como preto, que representam medo e insegurança. </p>
                  <p class="description"><span class="firstp">Quando </span> as crianças são descobertas e precisam fugir novamente, a
                      paleta volta ao azul, expressando tristeza, e posteriormente às cores acinzentadas, simbolizando medo e mistério, 
                      até o desfecho feliz, onde tudo volta ao amarelo, indicando satisfação e normalidade. A personagem Suzy, ao final,
                        muda do rosa e vermelho para o amarelo, simbolizando ousadia e exuberância.</p>
                  <img class="primeiraft" src="imgs/img/mkfoto1.png" alt="">
                  <img src="imgs/img/mkfoto2.png" alt="">
                  <img src="imgs/img/mkfoto3.png" alt="">

                  
                  <div class="comentario">
                      <h2>Você percebeu mais alguma coisa no filme?</h2>
                      <form action="./processa/processa-comentario.php" method="post">
                        <input type="hidden" name="acao" value="salvar">
                        <input type="hidden" name="id" value="<?php echo $comentarios['comentarioID']; ?>">
                        <input id="placeholder-text" type="text" placeholder="Escreva um comentário" name="comentario" value="<?php echo $comentario['comentario']; ?>" required>
                        <input type="submit" class="myButton" value="enviar"></input>
                      </form>

                  </div>
              </div>
          </div>

          <div class="accordion-content">
              <div class="header">
                  <img class="capas" src="imgs/img/apcapa.jpg" alt="">
                  <div class="textheader">
                      <span class="title">Amélie Poulain</span>
                      <p class="sinop">Amélie é uma jovem do interior que se muda para Paris e logo começa a trabalhar em um café. Num 
                        belo dia, ela encontra uma caixinha dentro de seu apartamento e decide procurar o dono. A partir daí, sua 
                        perspectiva de vida muda radicalmente.</p>
                  </div>

                  <div class="flecha">
                      <i class="fa-solid fa-plus"></i>
                  </div>
              </div>
              <div class="descricao">
                  <p class="description1"> <span class="firstp">Durante </span> o filme, as cores complementares vermelho e verde 
                    predominam, sendo observadas no cenário, roupas dos personagens, móveis e na estação de trem, criando contrastes 
                    vibrantes que trazem impacto visual. O vermelho, associado à personagem Amélie, simboliza amor, paixão, força e 
                    determinação, enquanto o verde representa esperança, paz, calma e crescimento, refletido na cena em que Amélie 
                    veste verde ao receber Nino.</p>
                  <p class="description"><span class="firstp">O </span> amarelo, presente na iluminação, transmite energia, alegria e 
                    otimismo. Há também cenas com a cor azul, que representam frieza e solidão, como ao lado de um abajur azul. O filme 
                    possui uma atmosfera quente, iluminada e quase sem cenas de escuridão, reforçando uma sensação de fábula, sonho e 
                    paixão através de sua paleta de cores vibrantes.  </p>
                  <img class="primeiraft" src="imgs/img/apfoto1.png" alt="">
                  <img src="imgs/img/apfoto2.png" alt="">
                  <img src="imgs/img/apfoto3.png" alt="">

                  
                  <div class="comentario">
                      <h2>Você percebeu mais alguma coisa no filme?</h2>
                      <form action="./processa/processa-comentario.php" method="post">
                        <input type="hidden" name="acao" value="salvar">
                        <input type="hidden" name="id" value="<?php echo $comentarios['comentarioID']; ?>">
                        <input id="placeholder-text" type="text" placeholder="Escreva um comentário" name="comentario" value="<?php echo $comentario['comentario']; ?>" required>
                        <input type="submit" class="myButton" value="enviar"></input>
                      </form>

                  </div>
              </div>
          </div>

          <div class="accordion-content">
              <div class="header">
                  <img class="capas" src="imgs/img/wcapa.png" alt="">
                  <div class="textheader">
                      <span class="title">Whiplash</span>
                      <p class="sinop">Andrew sonha em ser o melhor baterista de sua geração. Ele chama a atenção do impiedoso mestre do 
                          jazz Terence Fletcher, que ultrapassa os limites e transforma seu sonho em uma obsessão, colocando em risco a 
                          saúde física e mental do jovem músico.</p>
                  </div>

                  <div class="flecha">
                      <i class="fa-solid fa-plus"></i>
                  </div>
              </div>
              <div class="descricao">
                  <p class="description1"> <span class="firstp">No </span> filme Whiplash, as cores desempenham um papel simbólico na 
                    narrativa, especialmente o preto, que representa o poder e a autoridade do Conservatório Shaffer, criando uma 
                    atmosfera de opressão ao redor de Neiman, cuja prática ocorre em ambientes sombrios e escuros. Os figurinos também 
                    usam o preto para refletir o avanço de Neiman na hierarquia, além de contrastar com o branco, que inicialmente 
                    simboliza sua vulnerabilidade.  </p>
                  <p class="description"><span class="firstp">O </span> vermelho aparece em momentos de conflito mais intenso, como as 
                    mãos sangrando de Neiman durante as sessões de bateria difíceis, destacando suas batalhas pessoais e obstáculos 
                    emocionais. A estratégia de cores foi cuidadosamente planejada pela equipe de produção para estabelecer emoções e 
                    relações de poder, utilizando a paleta de cores em cenas, figurinos e cenários para construir o clima e refletir a 
                    perspectiva de Neiman, mantendo ao mesmo tempo um aspecto realista ao longo do filme. </p>
                  <img class="primeiraft" src="imgs/img/wfoto1.png" alt="">
                  <img src="imgs/img/wfoto2.png" alt="">
                  <img src="imgs/img/wfoto3.png" alt="">

                  
                  <div class="comentario">
                      <h2>Você percebeu mais alguma coisa no filme?</h2>
                      <form action="./processa/processa-comentario.php" method="post">
                        <input type="hidden" name="acao" value="salvar">
                        <input type="hidden" name="id" value="<?php echo $comentarios['comentarioID']; ?>">
                        <input id="placeholder-text" type="text" placeholder="Escreva um comentário" name="comentario" value="<?php echo $comentario['comentario']; ?>" required>
                        <input type="submit" class="myButton" value="enviar"></input>
                      </form>

                  </div>
              </div>
          </div>

          <div class="accordion-content">
              <div class="header">
                  <img class="capas" src="imgs/img/hcapa.jpg" alt="">
                  <div class="textheader">
                      <span class="title">Her</span>
                      <p class="sinop">O solitário escritor Theodore desenvolve uma relação de amor especial com o novo sistema 
                        operacional do seu computador. Surpreendentemente, ele acaba se apaixonando pela voz deste programa, uma 
                        entidade intuitiva e sensível chamada Samantha.</p>
                  </div>

                  <div class="flecha">
                      <i class="fa-solid fa-plus"></i>
                  </div>
              </div>
              <div class="descricao">
                  <p class="description1"> <span class="firstp">No </span> filme "Her", as diferentes tonalidades de vermelho 
                    representam emoções como isolamento, solidão e o desejo de amor, além de simbolizar a relação de Theodore com 
                    Samantha, uma nova forma de cuidado afetivo. O vermelho está presente em diversos ambientes ao seu redor, com 
                    variações de tonalidade que reforçam o sentimento de conexão ou identificação com outras pessoas que vivem 
                    relações semelhantes. A paleta de cores é equilibrada scene a scene, alternando entre cenas com mais ou menos 
                    vermelho para evitar exageros.</p>
                  <p class="description"><span class="firstp">Além </span> dos tons quentes que predominam, o filme também 
                    incorpora cores frias, como azul e verde, que contrastam e representam o isolamento e a frieza de ambientes 
                    como o escritório e o apartamento de Theodore. Essa combinação cria um contraste visual que reflete seu conflito 
                    interno entre o desejo por conexão e o mundo distante e tecnológico em que vive, adicionando profundidade 
                    emocional à narrativa. O diretor Spike Jonze utiliza uma cuidadosa combinação de cores para não só criar uma 
                    estética visual envolvente, mas também para sustentar a história, usando as tonalidades como uma ferramenta que 
                    espelha as jornadas emocionais dos personagens, conferindo maior impacto e significado à trama. </p>
                  <img class="primeiraft" src="imgs/img/hfoto1.png" alt="">
                  <img src="imgs/img/hfoto2.png" alt="">
                  <img src="imgs/img/hfoto3.png" alt="">

                  
                  <div class="comentario">
                      <h2>Você percebeu mais alguma coisa no filme?</h2>
                      <form action="./processa/processa-comentario.php" method="post">
                        <input type="hidden" name="acao" value="salvar">
                        <input type="hidden" name="id" value="<?php echo $comentarios['comentarioID']; ?>">
                        <input id="placeholder-text" type="text" placeholder="Escreva um comentário" name="comentario" value="<?php echo $comentario['comentario']; ?>" required>
                        <input type="submit" class="myButton" value="enviar"></input>
                      </form>

                  </div>
              </div>
          </div>



    </div>
  </main>
  <script src="filmes.js"></script>
</body>
</html>