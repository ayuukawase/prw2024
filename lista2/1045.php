<?php
    list($a, $b, $c) = explode(" ", readline());
    $a2 = doubleval($a);
    $b2 = doubleval($b);
    $c2 = doubleval($c);
    
    if ($b > $a && $b > $c)
    {
        $a2 = doubleval($b);
        if ($a > $c)
        {
            $b2 = doubleval($a);
            $c2 = doubleval($c);
        }
        else
        {
            $b2 = doubleval($c);
            $c2 = doubleval($a);
        }
    }
    else if ($c > $a && $c > $b)
    {
        $a2 = doubleval($c);
        if ($a > $b)
        {
            $b2 = doubleval($a);
            $c2 = doubleval($b);
        }
        else
        {
            $b2 = doubleval($b);
            $c2 = doubleval($a);
        }
    }
    
    if ($a2 >= ($b2 + $c2))
    {
        echo "NAO FORMA TRIANGULO\n";
    } else {
        if (pow($a2, 2) == pow($b2, 2) + pow($c2, 2))
        {
            echo "TRIANGULO RETANGULO\n";
            if ($a2 == $b2 and $a2 == $c2)
            {
                echo "TRIANGULO EQUILATERO\n";
            }
            else if ($a2 == $b2 or $a2 == $c2 or $b2 == $c2)
            {
                echo "TRIANGULO ISOSCELES\n";
            }
        }
        else if (pow($a2, 2) > pow($b2, 2) + pow($c2, 2)) 
        {
            echo "TRIANGULO OBTUSANGULO\n";
            if ($a2 == $b2 and $a2 == $c2)
            {
                echo "TRIANGULO EQUILATERO\n";
            }
            else if ($a2 == $b2 or $a2 == $c2 or $b2 == $c2)
            {
                echo "TRIANGULO ISOSCELES\n";
            }
        }
        else if (pow($a2, 2) < pow($b2, 2) + pow($c2, 2))
        {
            echo "TRIANGULO ACUTANGULO\n";
            if ($a2 == $b2 and $a2 == $c2)
            {
                echo "TRIANGULO EQUILATERO\n";
            }
            else if ($a2 == $b2 or $a2 == $c2 or $b2 == $c2)
            {
                echo "TRIANGULO ISOSCELES\n";
            }
        }
    }
?>