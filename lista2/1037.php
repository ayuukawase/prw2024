<?php
    
    $valor = floatval(readline());
    
    switch(true) {
        case($valor >= 0 && $valor <= 25):
            echo "Intervalo [0,25]\n";
            break;
        case($valor > 25 && $valor <= 50):
            echo "Intervalo (25,50]\n";
            break;
        case($valor > 50 && $valor <= 75):
            echo "Intervalo (50,75]\n";
            break;
        case($valor > 75 && $valor <= 100):
            echo "Intervalo (75,100]\n";
            break;
        default:
            echo "Fora de intervalo\n";
    }

?>