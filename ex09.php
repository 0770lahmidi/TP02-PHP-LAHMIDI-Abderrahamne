<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$sommeNotes = 0;
$nombreEtudiants = count($notes);
$etudiantsValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

foreach ($notes as $nom => $note) {
    $sommeNotes += $note;
    
    if ($note >= 10) {
        $etudiantsValides++;
    }
    
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

$moyenneClasse = $sommeNotes / $nombreEtudiants;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableau associatif et notes</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-bottom: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Résultats des étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Validé</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $nom => $note): ?>
                <tr>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $note; ?></td>
                    <td><?php echo ($note >= 10) ? "Validé" : "Non validé"; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><strong>Somme des notes :</strong> <?php echo $sommeNotes; ?></p>
    <p><strong>Moyenne de la classe :</strong> <?php echo $moyenneClasse; ?></p>
    <p><strong>Nombre d'étudiants ayant validé :</strong> <?php echo $etudiantsValides; ?></p>
    <p><strong>Meilleure note :</strong> <?php echo $meilleureNote; ?> par <?php echo $meilleurEtudiant; ?></p>
</body>
</html>