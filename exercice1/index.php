<link rel="stylesheet" href="css/style.css">
<div class="result">
    <h1>Exercice 1</h1>
    <?php 

    require 'functions.php';

    $cote = rand(1,10);
    echo 'Le perimetre du carre est : ' . perimetre($cote,$cote).'m'."<br/><br/>";
    echo 'La surface du carre est : ' . surface($cote,$cote).'m**2'."<br/><br/>";
    echo 'LA diagonale du carre est : ' . diagonale($cote,$cote).'m'."<br/><br/>";

?>
</div>


<div class="footer">
    <button><a href="#">Precedent</a></button>
    <button><a href="/TP real/exercice2/">Suivant</a></button>
</div>