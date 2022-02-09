<?php
function est_nombre($nbre ,array &$erreur) {
    if (!is_numeric($nbre)) {
        $erreur[] = $nbre;
    }
    if (empty($nbre) && $_SESSION['post'][$nbre]!= 0) {
        $erreur[] = $nbre;
    }
}

function afficher_error (string $name)
{
    if (isset($_SESSION['error'])) {
        if (in_array($_SESSION['post'][$name],$_SESSION['error'])) {
            if (!is_numeric($_SESSION['post'][$name])) {
                echo "ERROR     Entrer un nombre !";
            }
            elseif (empty($_SESSION['post'][$name]) && $_SESSION['post'][$name]!= 0) {
                echo "ERROR     Entrer une valeur !";
            }            
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

function equationSecondDeg(int $a , int $b ,int $c){
    if ($a==0) {
        if ($b==0) {
            if ($c==0) {
                echo 'S = : R';
            } else {
                echo 'S = Ensenble vide';
            }
        } else {
            echo "S = ". -1*$b/$c;
        }
    } else {
        $delta = $b**2 - 4*$a*$c ;
        if ($delta < 0) {
            echo "Pas de solution dans R !";
        } elseif ($delta == 0) {
            echo "S = ". -1*$b / 2*$a;
        } else {
            echo "S1 = ".($b - sqrt($delta)) / 2*$a ."<br/>"."S2 = ".($b + sqrt($delta)) / 2*$a."<br/>";
        }
        
    }
    
}

?>