<?php

    function suerte($numero) {
        $numero_str = (string) $numero;

    if(strpos($numero_str, '13') !== false) {
        return true;
    } else {
        return false;
    }
}

    $entrada = trim(fgets(STDIN));

    if (suerte($entrada)) {
        echo $entrada." es de Mala Suerte\n";
    } else {
        echo $entrada." NO es de Mala Suerte\n";
    }

?>