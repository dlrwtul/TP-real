<?php 

function afficher_error ($name ,string $str) {
    
    if (isset($_SESSION['error'])) {
        if (in_array($_SESSION['post'][$name],$_SESSION['error'])) {
            if(empty($_SESSION['post'][$name])) {
                echo "ERROR   Veuillez entrer un nombre dans ".$str." !" ;
            } else {
                if ($name=='j') {
                    echo "ERROR   Veuillez entrer une valeur valide de ".$str." (1-31)!" ;
                } elseif ($name=='m') {
                    echo "ERROR   Veuillez entrer une valeur valide de ".$str." (1-12)!" ;
                } else {
                    echo "ERROR   Veuillez entrer une valeur valide de ".$str." (>=0)!" ;
                }
            }
        }
    }
}

function non_valide(string $name1,string $name2,string $name3)
{
    if (!isset($_SESSION['error'])) {
        if (!valide_date($_SESSION['post'][$name1],$_SESSION['post'][$name2],$_SESSION['post'][$name3])) {
            echo "ERROR     Entrer une date valide !!!";
        }
    }
}

function afficher_valid(string $name)
{
    
    if (isset($_SESSION['error'])) {
        if (!in_array($_SESSION['post'][$name],$_SESSION['error'])) {
            echo $_SESSION['post'][$name]; 
        }    
    }

}


function valide_an ($an):bool 
{
    if ($an >= 0) {
        return true;
    }
    return false;
}

function valide_mois ($mois):bool 
{
    if ($mois >=1 && $mois <= 12) {
        return true;
    }
    return false;
}

function bissextile($an):bool
{
    if(($an % 100 != 0 || $an % 400 == 0) && $an % 4 == 0) {
        return true;
    } else {
        return false;
    }
}

function valide_Jour ($an , $mois ,$jour):bool 
{
    if ($jour < 1 || $jour > 31) {
        return false;
    }
    if ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) {
        if ($jour <= 30) {
            return true;
        }
    } elseif ($mois == 2) {
        if (bissextile($an)) {
            if ($jour <= 29) {
                return true;
            }
        } else {
            if ($jour <= 28) {
                return true;
            }
        }
    } else {
        if ($jour <= 31) {
            return true;
        }
    }
    
    return false;
    
}

function nbr_Jour ($an ,$mois):int 
{
    if ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) {
        return 30;
    } elseif ($mois == 2) {
        if (bissextile($an)) {
            return 29;
        } else {
            return 28;
        }
    } else {
        return 31;
    }    
}

function valide_date ($an ,$mois ,$jour):bool 
{
    if (valide_an($an) && valide_mois($mois) && valide_jour($an,$mois,$jour)) {
        return true;
    }
    return false;
}

function date_suiv($an ,$mois ,$jour):void
{
    if (valide_date($an,$mois,$jour + 1)) {
        echo "La date suivante est : ".$jour + 1 ."/".$mois."/".$an ."<br/>";
    } else {
        if ($mois==12) {
            echo "La date suivante est : 1/1/".$an+1 ."<br/>";
        } else {
            echo "La date suivante est : 1/".$mois + 1 ."/".$an."<br/>";
        }
    }
}

function date_prec($an ,$mois ,$jour):void
{
    if (valide_date($an,$mois,$jour - 1)) {
        echo "La date precedente est : ".$jour - 1 ."/".$mois."/".$an ."<br/>";
    } else {
        if ($mois==1) {
            echo "La date precedente est : 31/12/".$an-1 ."<br/>";
        } else {
            echo "La date precedente est : ".nbr_Jour($an,$mois-1)."/".$mois - 1 ."/".$an."<br/>";
        }
    }
}



function error_jour ($nbre,$nbre2,$nbre3, array &$tabError) 
{
    if (empty($nbre3) || !is_numeric($nbre3)) {
        $tabError[]=$nbre3;
    }
    if (empty($nbre2) || !is_numeric($nbre2)) {
        $tabError[]=$nbre2;
    }
    if ((empty($nbre) && $nbre != 0) || !is_numeric($nbre)) {
        $tabError[]=$nbre;
    }
}