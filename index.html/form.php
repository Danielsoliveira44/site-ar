<?php 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Contato</title>
</head>
<body>
    
<div class="footer">
        <div class="img_footer">
            <img src="../img/footer-ar-condicionado.jpg" alt="">
        </div>

<div>
            <div class="panel-footer" style="background: none;">
                    <h4>ENVIE-NOS UMA MENSAGEM</h4>
                    <form action="rodape_contato_envia.php" name="form_contato" method="post">
                        <p>
                            <span >
                                <span  id="basic-addon1">
                                </span>
                                <input type="text" name="nome_contato" placeholder="Nome" aria-describedby="basic-addon1" class="transparente" required>
                            </span>
                        </p>
                        <p>
                            <span >
                                <span  id="basic-addon2">
                                </span>
                                <input type="email" name="email_contato" placeholder="Email" aria-describedby="basic-addon2" class="transparente" required>
                            </span>
                        </p>
                        <p>
                            <span >
                                <span  id="basic-addon3">
                                </span>
                                <textarea name="comentario_contato" cols="30" rows="5" placeholder="Menssagem" aria-describedby="basic-addon3" class="transparente" required>
                             </textarea>
                            </span>
                        </p>
                        <p>
                            <button class="btn_form" aria-label="enviar" role="button">
                                Enviar
                                <span class=" aria-hidden="true></span>
                            </button>
                        </p>
                    </form>
            </div>
        </div>
</body>
</html>