<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'master';
$categorias[] = 'senior';



$nome = $_POST['nome'];  
$idade = $_POST['idade'];

# empty verifica se o nome esta vazio
#strlen
if (empty($nome))
{
   echo 'Campo nome preechimento obrigatorio'; 
}  
if(strlen($nome) < 3) 
{
    echo 'O nome deve conter mais de dois caracteres';
}
if(strlen($nome) > 40)
{
    echo 'Nome muito extenso';
}
# !is_numeric verifica se a string e uma string numerica
if(!is_numeric($idade))
{
    echo 'Informe um numero para idade';
}




if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i];
        
    }
}
elseif($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'juvenil')
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i];
        
    }
}
elseif($idade >= 19 && $idade <= 35)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'master')
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i];
         
    }
}
elseif ($idade >= 36)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'senior')
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i];
         
    }
}











?>