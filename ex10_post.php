<?php
$message = "";

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['groupe'])) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

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
    <title>Traitement POST</title>
</head>
<body>
    <h1>Résultat du traitement POST</h1>
    <p><?php echo $message; ?></p>
    <p><a href="ex10_post.html">Retour au formulaire</a></p>
</body>
</html>