<?php

    $senhaCorreta = false;
    while (!$senhaCorreta) {
        if (intval(readline()) == 2002) {
            echo "Acesso Permitido\n";
            $senhaCorreta = true;
        } else
            echo "Senha Invalida\n";
    }

?>