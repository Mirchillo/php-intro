<?php

    include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    
    <form action="script.php" method="post">
        <?php
            $mensagemDeErro = obterMensagemDeErro();
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            }

            $mensagemDeSucesso = obterMensagemDeSucesso();
            if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
            }
        ?>
        <p>Your name:
            <input type="text" name="nome">
        </p>
        <p>Your age:
            <input type="text" name="idade">
        </p>
        <p><input type="submit" value="Enviar dados do competidor"></p>
    </form>
</body>
</html>