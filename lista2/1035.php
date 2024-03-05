<?php
    
    $linha = explode(" ", readline());
    $a = $linha[0];
    $b = $linha[1];
    $c = $linha[2];
    $d = $linha[3];
    
    if($b > $c && $d > $a && ($c + $d) > ($a + $b) && $c > 0 && $d > 0 && $a % 2 == 0) {
            echo "Valores aceitos\n";
        }else {
            echo "Valores nao aceitos\n";
        }

?>