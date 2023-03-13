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
            <img src="../img/footer-ar-condicionado.jpg" id="ar_footer" alt="">
        </div>

<div>
            <div class="panel-footer" style="background: none;">
            <div class="form_footer" id="contato">
                <h1>Contato</h1>
                <img src="../linha.svg" id="linha_footer" alt="linha a baixo do contato">
        </div>
        <div class="formulario">
            <div class="endereco">
            <a href="https://goo.gl/maps/P5oGcGS5WagKEp9o6"><h5>ENDEREÇO</h5></a>
            <h4>ENTRE EM CONTATO</h4>

            </div>
                    <h4>ENVIE-NOS UMA MENSAGEM</h4>
                    <form action="rodape_contato_envia.php" name="form_contato" method="post">
                       <div class="row">
                    <p id="name">
                            <span>
                                <span id="basic-addon1">
                                </span>
                                <input type="text" name="nome_contato" placeholder="Nome" aria-describedby="basic-addon1" class="transparente" required>
                            </span>
                        </p>
                        <p>
                            <span>
                                <span id="basic-addon2">
                                </span>
                                <input type="email" name="email_contato" placeholder="E-mail" aria-describedby="basic-addon2" class="transparente" required>
                            </span>
                        </p>
                        </div>
                        <p>
                            <span>
                                <span id="basic-addon3">
                                </span>
                                <textarea name="comentario_contato" cols="30" rows="5" placeholder="Menssagem" aria-describedby="basic-addon3" class="menssagem transparente" required>
                             </textarea>
                            </span>
                        </p>
                        <p id="btn-center">
                            <button class="btn_form" aria-label="enviar" role="button">
                                Enviar
                                <span class=" aria-hidden="true></span>
                            </button>
                        </p>
                    </form>
                    <div class="social">
            <a href="https://www.facebook.com/" id="face" target="_blank" class="social-icon instagram">
                <img src="../img/social/facebook.png" alt="icon facebook">
            </a>
            <a href="https://www.instagram.com/" id="insta" target="_blank" class="social-icon facebook">
                <img src="../img/social/instagram.png" alt="icon instagram">
            </a>
        </div>
                    </div>
            </div>
        </div>
        
</div>
       
        <div class="topo_form">
           <a href="index.php"><img src="../img/btn_topo.png" alt="botao para home"></a> 
        </div>
</div>
</body>
</html>