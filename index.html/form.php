<?php 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contato</title>
</head>
<body>
<div class="">
            <div class="panel-footer" style="background: none;">
                    <h4>ENVIE-NOS UMA MENSAGEM</h4>
                    <form action="rodape_contato_envia.php" name="form_contato" method="post">
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" name="nome_contato" placeholder="Nome" aria-describedby="basic-addon1" class="form-control" required>
                            </span>
                        </p>
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email_contato" placeholder="Email" aria-describedby="basic-addon2" class="form-control" required>
                            </span>
                        </p>
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon3">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                <textarea name="comentario_contato" cols="30" rows="5" placeholder="Menssagem" aria-describedby="basic-addon3" class="form-control" required>
                             </textarea>
                            </span>
                        </p>
                        <p>
                            <button class="btn btn-danger btn-block" aria-label="enviar" role="button">
                                Enviar
                                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                            </button>
                        </p>
                    </form>
            </div>
        </div>
</body>
</html>