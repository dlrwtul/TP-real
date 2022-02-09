<?php 
session_start(); 
include_once 'functions.php';
?>
<link rel="stylesheet" href="css/style.css">

<div id="entete" style="margin:1% 1%;"><h1>Exercice 7</h1> </div>

<div class="formulaire">
    <h1>Formulaire</h1>
    <form action="controller.php" method="post">
        <label for="j">Entrer le Jour :  </label><input type="text" name="j" value="<?php afficher_valid('j');?>" placeholder="Jour"><?php echo afficher_error('j',"jour");?><br><br>
        <label for="m">Entrer le Mois :  </label><input type="text" name="m" value="<?php afficher_valid('m');?>" placeholder="Mois"><?php echo afficher_error('m',"mois");?><br><br>
        <label for="a">Entrer l'Année :  </label><input type="text" name="a" value="<?php afficher_valid('a');?>" placeholder="Année"><?php echo afficher_error('a',"l'année");?><br><br><?php  non_valide('a','m','j'); ?>
        <input id="btn" type="submit" name="btn_ok" value="ok">
    </form>
</div>
<div class="result">
    <h1>Resultat : </h1>
    <?php 
    
    if (isset($_GET['valid'])) {
        date_suiv($_SESSION['post']['a'],$_SESSION['post']['m'],$_SESSION['post']['j']);
        date_prec($_SESSION['post']['a'],$_SESSION['post']['m'],$_SESSION['post']['j']);
    }
    ?>
</div>
<div class="footer">
    <button><a href="/TP-real/exercice6/">Precedent</a></button>
    <button><a href="/TP-real/exercice8/">Suivant</a></button>
</div>
<?php 
if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}
?>