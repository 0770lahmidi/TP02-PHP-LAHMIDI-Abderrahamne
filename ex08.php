<?php
$partie1 = "";
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        if ($i == 10) {
            $partie1 .= "<strong>$i</strong> ";
        } else {
            $partie1 .= "$i ";
        }
    }
    $i++;
}

$compteurWhile = 5;
$executionsWhile = 0;
while ($compteurWhile < 5) {
    $executionsWhile++;
    $compteurWhile++;
}

$compteurDoWhile = 5;
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteurDoWhile++;
} while ($compteurDoWhile < 5);

$partie3 = "";
$compteur = 0;
for ($j = 1; $j <= 20; $j++) {
    // Ignorer les multiples de 3
    if ($j % 3 == 0) {
        continue;
    }
    
    if ($compteur >= 16) {
        break;
    }
    
    $partie3 .= "$j ";
    $compteur++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Contrôle des itérations</title>
</head>
<body>
    <h1>Exercice 8 : Boucles et contrôle des itérations</h1>

    <section>
        <h2>1. Nombres pairs de 0 à 20</h2>
        <p><?php echo $partie1; ?></p>
    </section>

    <section>
        <h2>2. Comparaison while / do-while (compteur = 5)</h2>
        <p>Exécutions du corps avec <code>while</code> : <?php echo $executionsWhile; ?></p>
        <p>Exécutions du corps avec <code>do-while</code> : <?php echo $executionsDoWhile; ?></p>
    </section>

    <section>
        <h2>3. Boucle avec continue et break</h2>
        <p><?php echo $partie3; ?></p>
    </section>
</body>
</html>