<?php 
session_start();

include 'functions.php';

if (isset($_POST['btn_ok'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $_SESSION['post'] = $_POST;
    $tabError = [];
    est_nombre($a,$tabError);
    est_nombre($b,$tabError);
    est_nombre($c,$tabError);

    if (empty($tabError)) {
        header('location:index.php?valid');
    } else {
        $_SESSION['error'] = $tabError;
        header('location:index.php');
    }

}else {
    header('location:index.php');
}