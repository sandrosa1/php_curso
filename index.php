<?php
session_start();
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
            #operadores ternarios
            $mesagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if (!empty($mesagemDeSucesso))
            {
                echo $mesagemDeSucesso ;
            }
            $mesagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if (!empty($mesagemDeErro))
            {
                echo $mesagemDeErro ;
            }
        ?>
        <p> Seu nome: <input type="text" name="nome"/></p>
        <p> Sua idade: <input type="text" name="idade"/></p>
        <p><input type="submit" value="Enviar dados do competidor">

    </form>


</body>


</html>