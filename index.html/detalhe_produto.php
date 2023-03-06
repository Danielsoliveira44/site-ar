<?php 
include "../conn/connect.php";
$id = $_GET['id'];
$produto_detalhe = $conn->query("select * from vw_produtos where id like '%$id%';");
$row_detalhe = $produto_detalhe->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
         <img src="../img/ar_condicionado/<?php echo $row_detalhe['imagem'] ?>" alt="PRODUTO">
    </div>

                <p>
                    <?php echo $row_detalhe['descricao'];?>
                </p>           
</body>
</html>

