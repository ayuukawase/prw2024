<?php

    $grenais = 0;
    $continuar = 1;
    $vitorias_inter = 0;
    $vitorias_gremio = 0;
    $empates = 0;
    
    while($continuar == 1) {
        $grenais++;
        list($gol_inter, $gol_gremio) = explode(" ", readline());
        $gol_gremio = intval($gol_gremio);
        $gol_inter = intval($gol_inter);
        
        if($gol_gremio == $gol_inter)
            $empates++;
        elseif($gol_inter > $gol_gremio)
            $vitorias_inter++;
        elseif($gol_gremio > $gol_inter)
            $vitorias_gremio++;
        echo "Novo grenal (1-sim 2-nao)\n";
        $continuar = intval(readline());
    }
    
    echo "$grenais grenais\n";
    echo "Inter:$vitorias_inter\n";
    echo "Gremio:$vitorias_gremio\n";
    echo "Empates:$empates\n";
    
    if($vitorias_gremio == $vitorias_inter)
        echo "Nao houve vencedor\n";
    elseif($vitorias_gremio > $vitorias_inter)
        echo "Inter venceu mais\n";
    else
        echo "Inter venceu mais\n";
        
?>