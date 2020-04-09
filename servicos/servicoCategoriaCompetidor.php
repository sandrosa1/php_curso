<?php

function defineCategotiaCompetidor(string $nome, string $idade) : ?string
{
    $categorias[] = 'infantil';
    $categorias[] = 'juvenil';
    $categorias[] = 'master';
    $categorias[] = 'senior';
    if(validaNome($nome) && validaIdade($idade)) 
    {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemSucesso( "O nadador ".$nome.  " compete na categoria ".$categorias[$i] );
                    return null;
                }

            }
                    
        }
        elseif($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'juvenil')
                {
                    setarMensagemSucesso( "O nadador ".$nome. " compete na categoria ".$categorias[$i]);
                    return null;
                }
                    
            }
        }
        elseif($idade >= 19 && $idade <= 35)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'master')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria ".$categorias[$i]);
                    return null;
                }
                    
                
            }
        }
        elseif ($idade >= 36)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'senior')
                {
                    setarMensagemSucesso( "O nadador ".$nome. " compete na categoria ".$categorias[$i]);
                    return null;
                }
                    
                
            }
        
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }

}