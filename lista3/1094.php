<?php

    $numero_insercoes = intval(readline());
    $qtd_ratos = 0;
    $qtd_sapos = 0;
    $qtd_coelhos = 0;
    $qtd_cobaias = 0;
    for ($i = 1; $i <= $numero_insercoes; $i++) {
        list($qtd, $animal) = explode(" ", readline());
        $qtd_cobaias += $qtd;
        if ($animal == 'C')
            $qtd_coelhos += $qtd;
        elseif ($animal == 'S')
            $qtd_sapos += $qtd;
        elseif ($animal == 'R')
            $qtd_ratos += $qtd;
    }

    echo "Total: $qtd_cobaias cobaias\n";
    echo "Total de coelhos: $qtd_coelhos\n";
    echo "Total de ratos: $qtd_ratos\n";
    echo "Total de sapos: $qtd_sapos\n";
    echo "Percentual de coelhos: " . number_format((($qtd_coelhos / $qtd_cobaias) * 100), 2, '.', '') . " %\n";
    echo "Percentual de ratos: " . number_format((($qtd_ratos / $qtd_cobaias) * 100), 2, '.', '') . " %\n";
    echo "Percentual de sapos: " . number_format((($qtd_sapos / $qtd_cobaias) * 100), 2, '.', '') . " %\n";

?>