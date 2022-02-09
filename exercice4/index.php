<link rel="stylesheet" href="css/style.css">
<div class="result">
    <h1>Exercice 4</h1>
    <?php 
    require 'functions.php';

    $a = rand(1,10);
    $b = rand(1,10);

    echo 'nombre 1 : ' . $a ."<br/><br/>";
    echo 'nombre 2 : ' . $b ."<br/><br/>";

    $array = permute($a,$b);

    echo 'nombre 1 : ' . $array[0] ."<br/><br/>";
    echo 'nombre 2 : ' . $array[1] ."<br/><br/>";

?>
</div>
<div class="footer">
    <button><a href="/TP-real/exercice3/">Precedent</a></button>
    <button><a href="/TP-real/exercice5/">Suivant</a></button>
</div>