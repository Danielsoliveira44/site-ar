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
<div class="desc_prod">
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
                    <h3><?php echo $row['descricao']; ?></h3> <br> <br>
                    Quantidade Disponível: <?php echo $row['quantidade']; ?> em estoque
                </p>
                 <hr width="100%">
                <p id="preco">
                    <h2>
                        PREÇO: R$
                        <?php echo $row['preco']; ?>
                        
                    </h2>
                </p>
            </div>
        </div>
</div>
        <?php include 'form.php';?>         
</body>
</html>

