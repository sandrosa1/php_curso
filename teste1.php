<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


//print_r($categorias);

$nome = 'André';
$idade = 19;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if ( $categorias[$i] == 'infantil')
        {
            echo "O nadador ".$nome. " e da categoria ".$categorias[$i];
        }
    }  
} 
elseif($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if ( $categorias[$i] == 'adolescente')
        {
            echo "O nadador ".$nome. " e da catégoria ".$categorias[$i];
        }
    }
}
else{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if( $categorias[$i] == 'adulto')
        {
            echo "O nadador ".$nome. " e da catégoria ".$categorias[$i];
        }
    }
}






  


