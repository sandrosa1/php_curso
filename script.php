<?php
/**Created by PhpStorm. ... */
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'master';
$categorias[] = 'senior';



$nome = $_POST['nome'];  
$idade = $_POST['idade'];

# empty verifica se o nome esta vazio
#strlen verifica o tamanho da string

if (empty($nome))
{
   $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio por favor preencha novamente';
   header('location: index.php');
   return;

}  
else if(strlen($nome) < 3) 
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de dois caracteres';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome e muito extenso';
    header('location: index.php');
    return;
}

# !is_numeric verifica se a string e uma string numerica
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um numero para idade';
    header('location: index.php');
    return;
}





if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem-de-erro'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        
        }

    }
            
}
elseif($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'juvenil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
            
    }
}
elseif($idade >= 19 && $idade <= 35)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'master')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
            
         
    }
}
elseif ($idade >= 36)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'senior')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
            
         
    }
}











?>