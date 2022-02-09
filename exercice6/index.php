<?php 
session_start(); 
include_once 'functions.php';
?>
<link rel="stylesheet" href="css/style.css">

<div id="entete" style="margin:1% 1%;"><h1>Exercice 6</h1> </div>

<div class="formulaire">
    <h1>Formulaire</h1>
    <form action="controller.php" method="post">
        <label for="a">Entrer le coeficient a :  </label><input type="text" name="a" value="<?php afficher_valid('a');?>" placeholder="entier a"><?php afficher_error('a');?><br><br>
        <label for="b">Entrer le coeficient b :  </label><input type="text" name="b" value="<?php afficher_valid('b');?>" placeholder="entier b"><?php afficher_error('b');?><br><br>
        <label for="c">Entrer le coeficient c :  </label><input type="text" name="c" value="<?php afficher_valid('c');?>" placeholder="entier c"><?php afficher_error('c');?><br><br>
        <input id="btn" type="submit" name="btn_ok" value="ok">
    </form>
</div>
<div class="result">
    <h1>Resultat : </h1>
    <?php 
    if (isset($_GET['valid'])) {
        equationSecondDeg($_SESSION['post']['a'],$_SESSION['post']['b'],$_SESSION['post']['c']);
    }
    ?>
</div>
<div class="footer">
    <button><a href="/TP-real/exercice5/">Precedent</a></button>
    <button><a href="/TP-real/exercice7/">Suivant</a></button>
</div>
<?php 
if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}
?>