<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario de inscrição</title>
    <meta name="autor" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>

    <p>FORMULARIO DE INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php

            $mensagemDeSucesso = obterMensagemSucesso();
            if (!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso ;
            }
            $mensagemDeErro = obterMensagemErro();
            if (!empty($mensagemDeErro))
            {
                echo $mensagemDeErro ;
            }
        ?>
        <p> Seu nome: <input type="text" name="nome"/></p>
        <p> Sua idade: <input type="text" name="idade"/></p>
        <p><input type="submit" value="Enviar dados do competidor">

    </form>


</body>


</html>