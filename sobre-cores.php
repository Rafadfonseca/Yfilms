<?php
include_once './includes/conexao.php';
$pagina = 'sobre-cores';
include_once './includes/header.php';
?>
<main>
      <div id="pagina4">
        <div id="textospag4">
          <h1>O que é colorimetria</h1>
          <p>As cores não são só estéticas elas têm um estudo por trás e normalmente não são usadas à toa, mas antes de vermos como e 
            onde são usadas precisamos entender mais sobre elas.</p>
          <p>As cores correspondem aos fenômenos físicos gerados pela luz. Elas são impressões visuais que os olhos absorvem quando há 
            luz presente. Branco é a união das sete cores do espectro (amarelo, vermelho, azul, verde, laranja, azul escuro e violeta), 
            preto é a ausência de cores ou luz, azul amarelo e vermelho são cores primárias, ou seja, a mistura de nenhuma cor pode 
            criar elas e a misturas delas criam as outras cores e tons, laranja verde e roxo, são as cores secundárias <hr><hr><hr><hr><hr><hr><hr><hr></p>
          </div>
    </div>
    

    <div id="pagina5">
      <div id="textospag5">
        <p class="textos5">  As cores podem ser classificadas por diferentes grupos como: Cores Primárias- São as cores "puras", que não são obtidas 
          da mistura de outras, e são a base para a criação de outras cores. São o vermelho, o amarelo e o azul. Cores Secundárias- 
          São obtidas pela mistura de duas cores primárias, como o verde (azul + amarelo), o laranja (amarelo + vermelho) e o roxo 
          (vermelho + azul). Cores Terciárias- Formadas pela mistura de uma cor primária com uma cor secundária. Exemplos: 
          amarelo-esverdeado, azul-arroxeado, vermelho-arroxeado, etc. </p>
        <img src="imgs/class.cores.png" alt="">
        <p class="textos5"> Elas também podem ser divididas entre as cores quentes, frias e neutras. Onde cada uma traz uma sensação diferente e 
          são associadas a coisas diferentes, por exemplo alguns sentimentos que cada cor se identifica, segundo Eva Heller no livro 
          A psicologia das cores, de 2002:</p>
        <ul>

          <li class="textos5"><span id="ver">Vermelho</span>: raiva, paixão, desejo, excitação, energia, velocidade, força, poder, calor, amor, agressividade, 
            perigo, fogo,
             sangue, guerra, violência. </li>
          <li class="textos5"><span id="ros">Rosa</span>: amor, inocência, saúde, feliz, contente, romântico, charmoso, divertido, suave, delicado, feminino.</li>
          <li class="textos5"><span id="ama">Amarelo</span>: sabedoria, conhecimento, relaxamento, alegria, felicidade, otimismo, idealismo, imaginação, esperança, 
            luz do sol, verão, desonestidade, covardia, traição, ciúme, cobiça, engano, doença, perigo, nostalgia.</li>
          <li class="textos5"><span id="lar">Laranja</span>: humor, energia, equilíbrio, calor, entusiasmo, vibrante, expansivo, extravagante.</li>
          <li class="textos5"><span id="verd">Verde</span>: cura, calmante, perseverança, tenacidade, autoconsciência, orgulho, natureza imutável, meio ambiente, 
            saudável, boa sorte, renovação, juventude, vigor, primavera, generosidade, fertilidade, ciúme, inexperiência, inveja.</li>
          <li class="textos5"><span id="azu">Azul</span>: fé, espiritualidade, contentamento, lealdade, realização, paz, tranquilidade, calma, estabilidade, 
            harmonia, unidade, confiança, verdade, confiança, conservadorismo, segurança, limpeza, ordem, céu, água, frio, tecnologia, 
            depressão </li>
          <li class="textos5"><span id="rox">Roxo/violeta</span>: erotismo, realeza, nobreza, espiritualidade, cerimônia, misterioso, transformação, sabedoria,
             iluminação, crueldade, arrogância, luto, poder, sensível, intimidade.</li>
          <li class="textos5"><span id="mar">Marrom</span>: materialista, sensação, terra, casa, ao ar livre, confiabilidade, conforto, resistência, 
            estabilidade, simplicidade.</li>
          <li class="textos5"><span id="pre">Preto</span>: “Não”, poder, sexualidade, sofisticação, formalidade, elegância, riqueza, mistério, medo, anonimato, 
            infelicidade, profundidade, estilo, mal, tristeza, remorso, raiva.</li>
          <li class="textos5"><span id="bra">Branco</span>: “Sim”, proteção, amor, reverência, pureza, simplicidade, limpeza, paz, humildade, precisão, inocência, 
            juventude, nascimento, inverno, neve, bem, esterilidade, casamento (culturas ocidentais), morte (culturas orientais), frio, 
            clínico, estéril.</li>
          <li class="textos5"><span id="pra">Prateado</span>: riqueza, glamour, distinto, terreno, natural, elegante, alta tecnologia.</li><br>
          <li class="textos5"><span id="dou">Dourado</span>: preciosidade, extravagância, caloroso, riqueza, prosperidade, grandeza.</li>

        </ul>
        <img src="imgs/quentres e frias.png" alt="">
        <p class="textos5">  Também temos algumas harmonias que podemos fazer que “combinam” juntas, podem ser parecidas ou opostas, algumas delas 
          são: com cor complementar, Complementares divididas, Tetrádica, análogos, entre outros diversos.</p>
        <img src="imgs/harmonias.png" alt="">

      </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
<?php 
include_once './includes/footer.php';
?>
