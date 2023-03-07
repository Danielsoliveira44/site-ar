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
        <?php include "header.html"?>
<div class="banner_solar">
    <img src="../img/energia_solar.png" alt="imagem de energia solar instalada em uma casa.">

    <div id="img_banner_first">
        <img src="../linha.svg" alt="linha ao lado do banner">
       
    </div>
</div>

<section class="bg-mvv">
            <div class="mvv-container">
                <div class="mvv-conteudo">Missão
                    <div class="mvv-textos">Lorem ipsum dolor sit amet. Est dicta labore et sint expedita <br>
                    nam repellendus distinctio! Et Quis aliquam cum autem Quis ut <br>
                    voluptas blanditiis.</div>
                </div>
                <div class="mvv-conteudo">Visão
                    <div class="mvv-textos">Lorem ipsum dolor sit amet. Est dicta labore et sint expedita <br>
                    nam repellendus distinctio! Et Quis aliquam cum autem Quis ut <br>
                    voluptas blanditiis.</div>
                </div>
                <div class="mvv-conteudo">Valores
                    <div class="mvv-textos">Lorem ipsum dolor sit amet. Est dicta labore et sint expedita <br>
                    nam repellendus distinctio! Et Quis aliquam cum autem Quis ut <br>
                    voluptas blanditiis.</div>
                </div>
            </div>
        </section>

        <section class="fundo3">    
                <div>      
                    <h1 class="titulo-servicos" id="servicos"> Serviços       
                    <img class="linha2" src="../linha.svg" alt="linha bonita"> 
                    </h1>   
                </div>    
                <div class="div-grid">      
                <div>        
                <img class="img-servicos servicos-grid " src="../img/energia_solar_servico.jpg" alt="Instalação de painéis solares">      
                </div>      
                <div class="txt-grid txt2">        
                    <h2> Instalação de Painéis Solares em Indústrias </h2>      
                    </div>      
                    <div>        
                    <img class="img-servicos servicos-grid " src="../img/energia_solar.jpg" alt="Instalação de Ar Condicionado">      
                    </div>      
                    <div class="txt-grid txt2">        
                    <h2> Instalação de Painés Solares em Areas Rurais </h2>      
                </div>      
                <div>        
                <img class="img-servicos servicos-grid" src="../img/servico/manutencao.jpg" alt="Instalação de Ar Condicionado em Empresas">      
                </div>         
                <div class="txt-grid txt2">        
                <h2> Limpeza de Ar Condicionado </h2>      
                </div>      <div class="txt-grid txt2">        
                <h2> Instalação e Manutenção de Painéis Solares </h2>
                    </div>      
                <div class="servicos-grid">       
                <img class="img-servicos servicos-grid " src="../img/servico/casa.jpg" alt="Instalação de painéis solares">      
                </div>           
                <div class="txt-grid txt2">        
                    <h2> Instalação de Ar Condicionado em Residências </h2>
                    </div>      
                <div>        
                    <img class="img-servicos servicos-grid " src="../img/servico/comercial.jpg" alt="Instalação de painéis solares em areas rurais">      
                </div>      
                <div class="txt-grid txt2">       
                    <h2> Instalação e Manutenção de Ar Condicionado em Empresas </h2>
                    </div> 
                <div>
                <img class="img-servicos servicos-grid " src="../img/servico_ar.jpg" alt="Limpeza de Ar Condicionado">      
                </div>
                </div> 
                        </section>
        
<div class="sobre_nos" id="sobre-nos">
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

  
    <h1 id="produtos_txt " style="text-align: center;">Produtos</h1>
  
    <div class="linha w50" id="produtos">
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
            <?php while ($row = $ar_condicionado->fetch_assoc()) { ?>
                <a href="detalhe_produto.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../img/<?php echo $row['imagem']; ?> " alt="Ar condionado">
                </a>
            <?php } ?>
        
    </div>

    <div class="linha w95" ng-show="inverter">
            <?php while ($row = $inverter->fetch_assoc()) { ?>
                <a href="detalhe_produto.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../img/<?php echo $row['imagem']; ?>" alt="inverter">
                </a>
            <?php } ?>
            </div>
        

    <div class="linha w95" ng-show="multisplit">
        <?php while ($row = $multi_split->fetch_assoc()) { ?>
                <a href="detalhe_produto.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../img/<?php echo $row['imagem']; ?>" alt="multi-split">
                </a>
            <?php } ?>
    </div>

    <div class="linha w95" ng-show="energiasolar">
    <?php while ($row = $solar->fetch_assoc()) { ?>
                <a href="detalhe_produto.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../img/<?php echo $row['imagem']; ?>" alt="energia solar">
                </a>
            <?php } ?>
    </div>
      </section>
      
      <?php include ('form.php')?>
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