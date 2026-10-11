<?php
$message = "";

if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['groupe'])) {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if ($nom !== "" && $prenom !== "" && $groupe !== "") {
        $nomSec = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomSec = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeSec = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        $message = "Bienvenue " . $prenomSec . " " . $nomSec . ", vous appartenez au groupe " . $groupeSec . ".";
    } else {
        $message = "Erreur : Tous les champs doivent être remplis et ne pas contenir que des espaces.";
    }
} else {
    $message = "Veuillez soumettre le formulaire pour afficher le message de bienvenue.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <h1>Résultat du traitement GET</h1>
    <p><?php echo $message; ?></p>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>
</html>