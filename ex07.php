<?php
$nombre = 7;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles</title>
</head>
<body>
    <section>
        <h2>Table de multiplication de <?php echo $nombre; ?></h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "$nombre × $i = $resultat<br>";
        }
        ?>
    </section>

    <hr>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </section>
</body>
</html>