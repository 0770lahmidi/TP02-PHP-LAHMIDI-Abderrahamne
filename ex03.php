<?php
define('TAUX_TVA', 20);
define('DEVISE', 'MAD');

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * (TAUX_TVA / 100);
$totalTTC = $totalHT + $montantTVA;

$montantFinal = $totalTTC;
$montantFinal += 15;

$verificationTVA = defined('TAUX_TVA') ? 'La constante TAUX_TVA existe bien.' : 'La constante n\'existe pas.';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Récapitulatif - Exercice 3</title>
</head>
<body>
    <h1>Récapitulatif de la commande</h1>
    <ul>
        <li><strong>Total HT :</strong> <?php echo $totalHT . ' ' . DEVISE; ?></li>
        <li><strong>Montant de TVA :</strong> <?php echo $montantTVA . ' ' . DEVISE; ?></li>
        <li><strong>Total TTC :</strong> <?php echo $totalTTC . ' ' . DEVISE; ?></li>
        <li><strong>Montant final (avec livraison) :</strong> <?php echo $montantFinal . ' ' . DEVISE; ?></li>
    </ul>
    
    <p><em>Vérification :</em> <?php echo $verificationTVA; ?></p>
</body>
</html>