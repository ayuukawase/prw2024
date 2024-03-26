<?php

    function redundancias($texto) {
        $palavras = explode(" ", $texto);

        foreach ($palavras as &$palavra) {
            $silabas = str_split($palavra, 2);
            $nova = $silabas[0];

            for ($i = 1; $i < count($silabas); $i++) {
                if ($silabas[$i] != $silabas[$i - 1]) {
                    $nova .= $silabas[$i];
                }
            }

            $palavra = $nova;
        }

        return implode(" ", $palavras);
    }

    $entrada = trim(fgets(STDIN));

    echo redundancias($entrada) . "\n";

?>