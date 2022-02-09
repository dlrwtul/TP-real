<link rel="stylesheet" href="css/style.css">
<div class="result">
    <h1>Exercice 5</h1>
    <?php 
    require 'functions.php';

    $a =rand(1 , 10);
    $b =rand(1 , 10);

    $pointA = ['x' => $a, 'y' => $b];

    $a =rand(1 , 10);
    $b =rand(1 , 10);

    $pointB = ['x' => $a, 'y' => $b];

echo 'La distance entre les deux points est : ' . distance($pointA,$pointB)."<br/>";

?>
</div>
<div class="footer">
    <button><a href="/TP-real/exercice4/">Precedent</a></button>
    <button><a href="/TP-real/exercice6/">Suivant</a></button>
</div>