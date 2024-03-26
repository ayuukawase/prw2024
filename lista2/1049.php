<?php

    $char1 = readline();
    $char2 = readline();
    $char3 = readline();

    if($char1 == 'vertebrado') 
    {
        if($char2 == 'ave') 
        {
            if($char3 == 'carnivoro') 
            {
                echo "aguia\n";
            }
            else if($char3 == 'onivoro') 
            {
                echo "pomba\n";
            }
        } 
        else if($char2 == 'mamifero') 
        {
            if($char3 == 'onivoro') 
            {
                echo "homem\n";
            }
            else if($char3 == 'herbivoro') 
            {
                echo "vaca\n";
            }
        } 
    }
    else if($char1 == 'invertebrado') 
    {
        if($char2 == 'inseto') 
        {
            if($char3 == 'hematofago') 
            {
                echo "pulga\n";
            }
            else if($char3 == 'herbivoro') 
            {
                echo "lagarta\n";
            }
        } 
        else if($char2 == 'anelideo') 
        {
            if($char3 == 'hematofago') 
            {
                echo "sanguessuga\n";
            }
            else if($char3 == 'onivoro') 
            {
                echo "minhoca\n";
            }
        }
    }
?>