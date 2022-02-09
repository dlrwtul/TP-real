<?php

function somme($varUne , $varDeux)
{
    return $varUne + $varDeux;
}

function exponentielle($varUne ,$varDeux)
{
    $a = 1;
    $expo = 1;
    while ($a <= $varDeux) {
        $expo = $expo * $varUne;
        $a ++;
    }

    return $expo;
}

function diff($varUne , $varDeux)
{
    return $varDeux - $varUne;
}

function produit($varUne , $varDeux)
{
    return $varUne * $varDeux;
}

function modulo($varUne , $varDeux)
{
    return $varUne % $varDeux;
}

function division($varUne , $varDeux)
{
    return $varUne / $varDeux;
}
