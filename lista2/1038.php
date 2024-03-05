<?php
    
    $linha = explode(" ", readline());
    $codigo = $linha[0];
    $quantidade = $linha[1];
    
    $codigo = [1, 2, 3, 4, 5];
    
    switch(true) {
        case($codigo = 1):
            $cachorro = $quantidade * 4;
            echo "Total: R$ ".number_format($cachorro, 2, '.', '')."\n";
            break;
        case($codigo = 2):
            $salada = $quantidade * 4.5;
            echo "Total: R$ ".number_format($salada, 2, '.', '')."\n";
            break;
        case($codigo = 3):
            $bacon = $quantidade * 5;
            echo "Total: R$ ".number_format($bacon, 2, '.', '')."\n";
            break;
        case($codigo = 4):
            $torrada = $quantidade * 2;
            echo "Total: R$ ".number_format($torrada, 2, '.', '')."\n";
            break;
        case($codigo = 5):
            $refri = $quantidade * 1.5;
            echo "Total: R$ ".number_format($refri, 2, '.', '')."\n";
            break;
    }
    
?>