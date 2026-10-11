<?php
// 1. Déclarer une variable $moyenne (on testont les valeurs demandées : -1, 9, 10, 12, 14, 16, 21)
$moyenne = 21; // Vous pouvez changer cette valeur pour tester les différents cas

$message = "";

// 2. Vérifier que sa valeur est comprise entre 0 et 20 ; sinon afficher « Note invalide »
if ($moyenne < 0 || $moyenne > 20) {
    $message = "Note invalide";
} else {
    if ($moyenne < 10) {
        $message = "Non validé";
    } elseif ($moyenne < 12) {
        $message = "Passable";
    } elseif ($moyenne < 14) {
        $message = "Assez bien";
    } elseif ($moyenne < 16) {
        $message = "Bien";
    } else {
        $message = "Très bien";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Test des notes</title>
</head>
<body>
    <h1>Résultat de l'évaluation</h1>
    <p><strong>Moyenne testée :</strong> <?php echo $moyenne; ?></p>
    <p><strong>Message :</strong> <?php echo $message; ?></p>
</body>
</html>