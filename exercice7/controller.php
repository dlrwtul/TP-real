<?php 
session_start();

include 'functions.php';

if (isset($_POST['btn_ok'])) {
    $jour = $_POST['j'];
    $mois = $_POST['m'];
    $an = $_POST['a'];
    $_SESSION['post'] = $_POST;
    $tabError = [];
    error_jour($an,$mois,$jour,$tabError);

    if (valide_date($an,$mois,$jour)) {
        header('location:index.php?valid');
    } else {
        $_SESSION['error'] = $tabError;
        header('location:index.php');
    }

}else {
    header('location:index.php');
}