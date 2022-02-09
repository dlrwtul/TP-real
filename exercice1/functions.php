<?php

function perimetre($cote1 ,$cote2)
{
    return $cote1*2 + $cote2*2;
}

function surface($cote1 ,$cote2)
{
    return $cote1*$cote2;
}

function diagonale($cote1 ,$cote2)
{
    return sqrt($cote1**2 + $cote2**2);
}