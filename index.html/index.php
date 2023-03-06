<?php 
include "../conn/connect.php";

$ar_condicionado = $conn->query('select * from vw_produtos where id_tipo = 1');
$inverter = $conn->query('select * from vw_produtos where id_tipo = 2');
$multi_split = $conn->query('select * from vw_produtos where id_tipo = 3');
$solar = $conn->query('select * from vw_produtos where id_tipo = 4');

?>


<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Document</title>
</head >
<body ng-app="meuApp" ng-controller="meuController">
    <!-- <div class="topo"></div> -->
    <header>
    <div class="header">
      <a href="#"><img src="../img/logo.webp" alt="logo" class="logo"></a>
      <nav class="navigation">
        <ul>
          <li><a href="#home"Home>Home</a></li>
          <li><a href="#servicos"Serviços>Serviços</a></li>
          <li><a href="#sobre nos"Sobre nós>Sobre nós</a></li>
          <li><a href="#produtos"Produtos>Produtos</a></li>
          <li><a href="#contato"Contato>Contato</a></li> 
        </ul>
      </nav>
    </div>
<div class="banner_solar">
    <img src="../img/energiasolar.png" alt="imagem de energia solar instalada em uma casa.">

    <div id="img_banner_first">
        <img src="../linha.svg" alt="linha ao lado do banner">
       
    </div>
</div>

<div class="visao">
    <div class="img">
        <div id="img-1">
            <div>
               <h1>Visão</h1>
               <h2>Texto</h2>
            </div>
        </div>
        <div id="img-2">
            <div>
                <h1>Visão</h1>
                <h2>Texto</h2>
             </div>
        </div>
        <div id="img-3">
            <div>
                <h1>Visão</h1>
                <h2>Texto</h2>
             </div>
        </div>
    </div>

</div>

<div class="servico">
    <div class="srv_img">
        <img src="../img/servico_ar.jpg" alt="">
    </div>
    <div class="srv_txt">
        <h3>Texto</h3>
    </div>
    <div class="srv_img">
        <img src="../img/servico_ar.jpg" alt="">
    </div>
    <div class="srv_txt">
        <h3>Texto</h3>
    </div>
    <div class="srv_img">
        <img src="../img/servico_ar.jpg" alt="">
    </div>
    <div class="srv_txt">
        <h3>Texto</h3>
    </div>

</div>
<div class="servico">
    <div class="srv_txt">
        <h3>Texto</h3>
    </div>
    <div class="srv_img">
        <img src="../img/servico_ar.jpg" alt="">
    </div>
    <div class="srv_txt">
        <h3>Texto</h3>
    </div>
    <div class="srv_img">
        <img src="../img/servico_ar.jpg" alt="">
    </div>
    <div class="srv_txt">
        <h3>Texto</h3>
    </div>
    <div class="srv_img">
        <img src="../img/servico_ar.jpg" alt="">
    </div>
</div>

<div class="sobre_nos">
   <div class="titulo_sobre"> 
        <h1>Sobre nós</h1>
        <img src="../linha.svg" id="linha_sobre" alt="linha ao lado do banner">
        &nbsp;
        &nbsp;

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Accusamus soluta iusto voluptatum. Quos possimus sed omnis, <br>
         quis doloribus quidem non corporis exercitationem quia veniam, 
         blanditiis maiores excepturi ipsam iure consequatur.<br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Accusamus soluta iusto voluptatum. Quos possimus sed omnis,<br>
         quis doloribus quidem non corporis exercitationem quia veniam, 
         blanditiis maiores excepturi ipsam iure consequatur.</p>
    </div>
    <div id="logo_sobre">
        <img src="../img/logo_grande.png" alt="">
    </div>    

</div>
  </header>

  
    <h1 id="produtos_txt">Produtos</h1>
  
    <div class="linha w50">
        <div class="titulo" ng-mouseover="funcaoArcondicionado()">
            Ar-condicionado
        </div>
        <div class="titulo" ng-mouseover="funcaoInverter()">
            Ar-condicionado Inverter
        </div>
        <div class="titulo" ng-mouseover="funcaoMultisplit()">
            Multi Split
        </div>
        <div class="titulo" ng-mouseover="funcaoEnergiasolar()">
            Energia solar
        </div>
    </div>

    <div class="linha w95" ng-show="arcondicionado">
        <div style="display: flex;">
            <?php while ($row = $ar_condicionado->fetch_assoc()) { ?>
                <a href="detalhe_produto.php?id=<?php echo $row['id'] ?>" role="button">
                    <img src="../img/ar_condicionado/<?php echo $row['imagem'] ?> " alt="">
                </a>
            <?php } ?>
        </div>
    </div>

    <div class="linha w95" ng-show="inverter">
        <div>
            <img src="../img/inverter/ar_inverter-electrolux.jpg" alt="">
        </div>
        <div>
            <img src="../img/inverter/ar_inverter-elgin.jpg" alt="">
        </div>
        <div>
            <img src="../img/inverter/ar_inverter-lg.jpg" alt="">
        </div>
        <div>
            <img src="../img/inverter/ar_inverter-midea.jpg" alt="">
        </div>
        <div>
            <img src="../img/inverter/ar_inverter-samsung.jpg" alt="">
        </div>
    </div>

    <div class="linha w95" ng-show="multisplit">
        <div>
            <img src="../img/multi-split/multi-split-daikin.jpg" alt="">
        </div>
        <div>
            <img src="../img/multi-split/multi-split-fujitsu.jpg" alt="">
        </div>
        <div>
            <img src="../img/multi-split/multi-split-lg.jpg" alt="">
        </div>
        <div>
            <img src="../img/multi-split/multi-split-midea.jpg" alt="">
        </div>
        <div>
            <img src="../img/multi-split/multi-split-samsung.jpg" alt="">
        </div>
    </div>

    <div class="linha w95" ng-show="energiasolar">
        <div>
            <img src="../img/energia_solar/energia_solar.jpg" alt="">
        </div>
        <div>
            <img src="../img/energia_solar/energia_solar_casa.jpg" alt="">
        </div>
        <div>
            <img src="../img/energia_solar/energia_solar_dia.jpg" alt="">
        </div>
        <div>
            <img src="../img/energia_solar/energia_solar_img.jpg" alt="">
        </div>
        <div>
            <img src="../img/energia_solar/energia_solar_servico.jpg" alt="">
        </div>
    </div>
      </section>
      <div class="footer">
        <div class="img_footer">
        </div>

            <div class="form_footer">
                <h1>Contato</h1>
                <img src="../linha.svg" id="linha_footer" alt="linha a baixo do contato">
                <?php include ('form.php')?>
        </div>
      </div>
      <script>
        var app = angular.module('meuApp', []);
        app.controller('meuController', function($scope) {
          $scope.arcondicionado = true;
          $scope.inverter = false;
          $scope.multisplit = false;
                $scope.energiasolar = false;
          
          $scope.funcaoArcondicionado = function() {
            $scope.arcondicionado = true;
            $scope.inverter = false;
            $scope.energiasolar = false;
            $scope.multisplit = false;
          }
    
          $scope.funcaoInverter = function() {
            $scope.inverter = true;
            $scope.arcondicionado = false;
            $scope.energiasolar = false;
            $scope.multisplit = false;
          }
    
          $scope.funcaoMultisplit = function() {
            $scope.multisplit = true;
            $scope.arcondicionado = false;
            $scope.inverter = false;
                    $scope.energiasolar = false;
          }
    
          $scope.funcaoEnergiasolar = function() {
            $scope.energiasolar = true;
            $scope.arcondicionado = false;
            $scope.inverter = false;
            $scope.multisplit = false;
          }
        });
      </script>
</body>
</html>