<link rel="stylesheet" href="css/style.css">
<div class="result">
    <h1>Exercice 3</h1>
    <?php 
    require 'functions.php';
    $a = rand(1,10);
    $b = rand(1,10);
    
    echo "La somme des deux nombres est : " . somme($a,$b)."<br/><br/>";
    echo "L'Exponnentielle des deux nombres est : " . exponentielle($a,$b)."<br/><br/>";
    echo "La Différence des deux nombres est : " . diff($a,$b)."<br/><br/>";
    echo "Le Produit des deux nombres est : " . produit($a,$b)."<br/><br/>";
    echo "Le Modulo des deux nombres est : " . modulo($a,$b)."<br/><br/>";
    echo "La Division des deux nombres est : " . division($a,$b)."<br/><br/>";
    echo "Le Carré des deux nombres est : " . exponentielle($a,2).'    '.exponentielle($b,2)."<br/><br/>";
    

?>
</div>
<div class="footer">
    <button><a href="/TP-real/exercice2/">Precedent</a></button>
    <button><a href="/TP-real/exercice4/">Suivant</a></button>
</div>