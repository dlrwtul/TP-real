<link rel="stylesheet" href="css/style.css">
<div class="result">
    <h1>Exercice 2</h1>
    <?php

    require 'functions.php';

    $largeur = rand(1,10);
    $longueur = rand($largeur+1,$largeur+10);

    echo 'Le perimetre du rectangle est : ' . perimetre($largeur,$longueur).'m' ."<br/><br/>";
    echo 'La surface du rectangle est : ' . surface($largeur,$longueur).'m**2' ."<br/><br/>";
    echo 'LA diagonale du rectangle est : ' . diagonale($largeur,$longueur).'m' ."<br/><br/>";

    ?>
</div>
<div class="footer">
    <button><a href="/TP real/exercice1/">Precedent</a></button>
    <button><a href="/TP real/exercice3/">Suivant</a></button>
</div>