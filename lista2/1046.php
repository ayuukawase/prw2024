<?php
    list($inicio, $final) = explode(" ", readline());
    
    if($final > $inicio)
    {
        $tempo = $final - $inicio;
        echo "O JOGO DUROU ".$tempo." HORA(S)\n";
    }
    else
    {
        $tempo = abs($inicio - 24) + $final;
        echo "O JOGO DUROU ".$tempo." HORA(S)\n";
    }
?>