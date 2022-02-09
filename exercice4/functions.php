<?php 

function permute($varUne,$varDeux):array
{
    $varTemp = $varUne;
    $varUne = $varDeux;
    $varDeux = $varTemp;
    return [$varUne , $varDeux];
}