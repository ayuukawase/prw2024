<?php
$x=1;
while($n = intval(readline()) and $n >0){
    if($x>1)
        echo "\n";
    
    $linhas = [];
    for($i=0; $i < $n; $i++){
        $linhas[] = readline();
    }
    $achou = true;
    while($achou){
        $achou = false;
        for($i=0; $i<$n;$i++){
            if(substr_count($linhas[$i], "  ") > 0){
                $linhas[$i] = str_replace("  ", " ", $linhas[$i]);
                $achou = true;
            }
        }
    }
    $maior = 0;
    for($i = 0; $i<$n; $i++){
        $linhas[$i] = trim($linhas[$i]);
        $tamanho = strlen($linhas[$i]);
        if($tamanho > $maior){
            $maior = $tamanho;
        }
    }
    for($i = 0; $i<$n; $i++){
        $linhas[$i] = str_pad($linhas[$i], $maior, " ", STR_PAD_LEFT);
    }
    for($i = 0; $i<$n; $i++){
        echo $linhas[$i], "\n";
    }
    $x++;
}

?>