<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Poli Junior Engenharia</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="util/css/index.css">

     
  </head>
  <body>

    <script type="text/javascript">
     var texto = "A Poli Junior Engenharia é a empresa ideal para você?";
var result;

var count = 0;
function digitar() {
  result = document.getElementById("result");
  window.setTimeout(function() { inserir(texto[count]) }, 200);
}

function inserir(letra) {
  result.innerHTML += letra;
  count++;
  if(count < texto.length)
    window.setTimeout(function() { inserir(texto[count]) }, 100);
}

window.onload = digitar;
    </script>

    <style>
      .height-100 {
    height: 100vh;
    width: 100%;
    background-image: url(assets/soo.jpg);
    }
    .align-content-center{
      text-align: center;
      font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif;
      color: black;
    }
    .space{
      height: 40vh;
    }
    #ItemsLoop{
      padding-top: 5%;
    }

    .button {
    background-color: rgb(230,188,0, 0.5); 
    border: solid;
    border-color: #ffd100;
    color: black;
    text-align: center;
    text-decoration: none;
    font-size: 200%;
    opacity: 0.8;
    transition: 0.3s;
    border-radius: 8px;  
    }
    a.button:hover{
      background-color: #ffd100;
      border-color: rgb(230,188,0, 0.5);
      text-decoration: none;
    }
    </style>
   
   <?php
   include 'inc/navbar.html';
   ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <section class="height-100">
     <div class="align-content-center">
      <section class="space"></section>
    <section style="height:100px; font-size:250%"><div id="result"></div></section>
    <a href="button" class="button">Conheça nossos profitólios</a>
   
    </div>  

    </section>







    <section class="height-100">
      

    <section id="ItemsLoop" class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="item-topic-wow-fadeInUp" data-wow-delay="0.5s" data-wow-offset="100" data-iw-group="group1">
            <h4 data-iw-line="title_group1" class="row-css">DESENVOLVIMENTO HUMANO</h4>
            
            <div class="inner-texts">
              <p data-iw-multiline="body_group1"><br>Os psicólogos conhecem as melhores intervenções para desenvolver comportamentos e potencializar pessoas, justamente por terem conhecimentos que só se aprende na faculdade, sobre a natureza biopsicossocial humana.</p>
            </div>

            <div class="text-center">
              <a data-iw-link="link_group1" class=" btn btn-primary" href="servicos.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Saiba Mais</a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="item-topic-wow-fadeInUp" data-wow-delay="0.9s" data-wow-offset="100" data-iw-group="group2">
            <h4 data-iw-line="title_group2" class="row-css">SIGILO ASSEGURADO</h4>
            <div class="inner-texts">
              <p data-iw-multiline="body_group2"><br>Psicólogos seguem um rigoroso código de ética. O Conselho Federal de Psicologia, que regulamenta a classe profissional, tem rígidas diretrizes sobre confidencialidade. Os psicólogos devem manter total sigilo sobre todas as informações que seus clientes expõem.</p>
            </div>

            <div class="text-center">
              <a data-iw-link="link_group2" class=" btn btn-primary" href="servicos.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Saiba Mais</a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="item-topic-wow-fadeInUp" data-wow-delay="1.3s" data-wow-offset="100" data-iw-group="group3">
            <h4 data-iw-line="title_group3" class="row-css">EXPERIÊNCIA EM CONFLITOS</h4>
            <div class="inner-texts">
              <p data-iw-multiline="body_group3"><br>Psicólogos com experiência clínica e organizacional estão acostumados a lidar com conflitos em diversos contextos, incluindo o empresarial.
              Saber lidar com conflitos e emoções é essencial para melhorar os relacionamentos interpessoais.</p>
            </div>

            <div class="text-center">
              <a data-iw-link="link_group3" class=" btn btn-primary" href="servicos.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </section>


     <section style="justify-content: center" id="ItemsLoop" class="container">
      <div style="justify-content: center" class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="item-topic-wow-fadeInUp" data-wow-delay="0.5s" data-wow-offset="100" data-iw-group="group1">
            <h4 data-iw-line="title_group1" class="row-css">DESENVOLVIMENTO HUMANO</h4>
            
            <div class="inner-texts">
              <p data-iw-multiline="body_group1"><br>Os psicólogos conhecem as melhores intervenções para desenvolver comportamentos e potencializar pessoas, justamente por terem conhecimentos que só se aprende na faculdade, sobre a natureza biopsicossocial humana.</p>
            </div>

            <div class="text-center">
              <a data-iw-link="link_group1" class=" btn btn-primary" href="servicos.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Saiba Mais</a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="item-topic-wow-fadeInUp" data-wow-delay="0.9s" data-wow-offset="100" data-iw-group="group2">
            <h4 data-iw-line="title_group2" class="row-css">SIGILO ASSEGURADO</h4>
            <div class="inner-texts">
              <p data-iw-multiline="body_group2"><br>Psicólogos seguem um rigoroso código de ética. O Conselho Federal de Psicologia, que regulamenta a classe profissional, tem rígidas diretrizes sobre confidencialidade. Os psicólogos devem manter total sigilo sobre todas as informações que seus clientes expõem.</p>
            </div>

            <div class="text-center">
              <a data-iw-link="link_group2" class=" btn btn-primary" href="servicos.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Saiba Mais</a>
            </div>
          </div>
        </div>

       
    </section>





    </section>












    <section class="height-100">
      <h1>Projects</h1>
    </section>

  </body>
</html>