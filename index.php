<?php
include_once './includes/conexao.php';
$pagina = 'index';
include_once './includes/header.php';
?>

      <div id="tcapa">

        <div id="primeirot">
          <h2>BEM-VINDO AO YF</h2>
          <p id="pp">Um site onde você pode criar uma lista dos seus filmes favoritos, destacando aqueles com uma fotografia marcante.</p>
        </div>

        <div id="caixas">

          <a href=""> 
            <div id="caixa11" class="caixa12">
              <p class="pdiv">LISTA DE FILMES</p>
            </div>
          </a>

          <a href="">
            <div class="caixa12">
              <p class="pdiv">SOBRE NÓS</p>
            </div>
          </a>

        </div>

      </div>
    </div>
      </div>


      <div id="pagina2">

        <div id="textospag2">
          <p id="p1">O QUE VOCÊ PODE FAZER</p>
          <h1>Nós somos Your films</h1>
          
        <div id="linha"></div>
        <p class="p2">No <span>Your Films</span> você pode colocar filmes com a sua paleta de cores e dar sua opinião sobre a colorimetria dos filmes e sobre o próprio filme. Você pode também escrever sobre suas cenas favoritas e atores que você gostou da atuação.
            Aqui você também pode ver algumas analises sobre colorimetria  já feitas e algumas recomendações sobre filmes que são indicados pela escolha inteligente de paleta de cores.</p>
        <p class="p2"> Bem-Vindo ao <span>Your Films</span> !</p>
      </div>
      


    </header>

    <main>
      <div id="pagina3">
        <div id="fazer">
      <h1>O que você quer fazer?</h1>
        <div id="cards">
      <div id="cardrecomendados">
        <h3>VEJA FILMES RECOMENDADOS</h3>
        <p class="textocard">Clique aqui para ver alguma recomendação de filmes que tem uma fotografia chamativa</p>
        <div class="flechinha">
          <a target="_blank" href="...">
            <img class="flecha" src="imgs/flechas.png" alt="Ir para" title="Ir para">
          </a>
        </div>
      </div>

      <div id="cardlista">
        <h3>ADICIONE UM FILME A LISTA</h3>
        <p class="textocard">Clique aqui para adicionar um filme novo na sua lista </p>
        <div class="flechinha">
          <a target="_blank" href="...">
            <img class="flecha" src="imgs/flechas.png" alt="Ir para" title="Ir para">
          </a>
        </div>
      </div>

      <div id="cardcolorimetria"> 
        <div>
        <h3>ENTENDA COLORIMETRIA</h3>
        <p class="textocard">Clique aqui para ler um pouco sobre colorimetria e entender melhor sobre teoria de paletas de cores.</p>
        <div class="flechinha">
          <a target="_blank" href="...">
            <img class="flecha" src="imgs/flechas.png" alt="Ir para" title="Ir para">
          </a>
        </div>
      </div>
      </div>
    </div>
    </div>
    </main>
   <?php 
   include_once './includes/footer.php';
   ?>