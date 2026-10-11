<?php
$numeroMois = 3; 

$nomMois = "";

switch ($numeroMois) {
    case 1:
        $nomMois = "Janvier";
        break;
    case 2:
        $nomMois = "Février";
        break;
    case 3:
        $nomMois = "Mars";
        break;
    case 4:
        $nomMois = "Avril";
        break;
    case 5:
        $nomMois = "Mai";
        break;
    case 6:
        $nomMois = "Juin";
        break;
    case 7:
        $nomMois = "Juillet";
        break;
    case 8:
        $nomMois = "Août";
        break;
    case 9:
        $nomMois = "Septembre";
        break;
    case 10:
        $nomMois = "Octobre";
        break;
    case 11:
        $nomMois = "Novembre";
        break;
    case 12:
        $nomMois = "Décembre";
        break;
    default:
        $nomMois = "Numéro de mois invalide";
        break;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Mois de l'année</title>
</head>
<body>
    <h1>Affichage du mois</h1>
    <p>Numéro de mois testé : <?php echo $numeroMois; ?></p>
    <p><strong>Résultat :</strong> <?php echo $nomMois; ?></p>
</body>
</html>