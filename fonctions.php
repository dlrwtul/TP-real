<?php 
function positif (int $nbr):bool
{
    if ($nbr >0) {
        return true;
    }
    return false;
}

function redirect($nbre) {
    if (empty($nbre) || !is_numeric($nbre)) {
        header('location:index.php');
    }   
}

function affiche_error ($nbr ,string $str, array $array) {
    if(in_array($nbr,$array)) {
        if(empty($nbr)) {
            echo "ERROR   Veuillez entrer une valeur  ".$str." !"."<br/>" ;
        } elseif (!is_numeric($nbr)) {
            echo "ERROR   Veuillez entrer le nombre  ".$str." !"."<br/>" ;
        }else {
            echo "ERROR   Veuillez entrer un nombre  valide".$str." !"."<br/>" ;
        }
    }
}
