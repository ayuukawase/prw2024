<?php
    
    $tempo = intval(readline());
    $velocidade = intval(readline());
    
    $distancia = $tempo * $velocidade;
    
    $litros = $distancia / 12;
    
    echo number_format($litros,3,'.','')."\n";

?>