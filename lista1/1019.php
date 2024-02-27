<?php
    
    $tempo = intval(readline());
    
    $hora = floor($tempo / 3600);
    $minuto = floor(($tempo % 3600) / 60);
    $segundo = $tempo % 60;
    
    echo $hora.":".$minuto.":".$segundo."\n";

?>