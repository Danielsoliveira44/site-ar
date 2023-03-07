<?php 
include "../conn/connect.php";
    $id = $_GET['id'];
    $produto_detalhe = $conn->query("select * from vw_produtos where id like '%$id%';");
    $row = $produto_detalhe->fetch_assoc();
    $num_linhas = $produto_detalhe->num_rows;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include "header.html"?>
<div>
        <!-- Top para voltar -->
        <h2>
            <a href="javascript:window.history.go(-1)" role="button" >
                <span class="btn-voltar">
                    <img id="voltar" src="../img/voltar.png" alt="">
                </span>
            </a>
            &nbsp;
            &nbsp;
            Detalhes de <?php echo $row['nome']; ?>
        </h2>             
        <div id="container-main">
            <img src="../img/<?php echo $row['imagem']; ?>" class="img_datalhes" alt="">
            <div>
                <p>
                    <h2><?php echo $row['descricao']; ?></h2> <br> <br>
                    Quantidade Disponível: <?php echo $row['quantidade']; ?> em estoque
                </p>
                <?php
                    // Define o valor do desconto como 10%
                        $desconto = 0.1;
                    // Obtém o custo total do produto
                        $preco = $row['preco'];
                    // Calcula o valor com desconto
                        $preco_com_desconto = $preco * (1 - $desconto);
                ?>
                <p id="preco">
                    <h2>
                        PREÇO: R$
                        <?php echo number_format($preco_com_desconto, 3, '.', ','); // formata para exibir com duas casas decimais e separador de milhar com ponto ?>
                        <span class="preco-original">
                            <strike>R$<?php echo number_format($preco, 3, '.', ','); ?></strike>
                        </span>
                    </h2>
                </p>
            </div>
        </div>
        <?php include 'form.php';?>         
</body>
</html>

