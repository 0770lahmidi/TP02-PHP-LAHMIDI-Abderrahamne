<?php
// 1. Déclarer $nom, $prenom, $age et $formation avec des données fictives
$nom = "Abderrahmane";
$prenom = "LAHMIDI";
$age = 19;
$formation = "Informatique";

// 2. Construire une phrase de présentation en utilisant la concaténation .
$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ".";
echo $phrase . "<br>";

// 3. Compléter cette phrase avec .= pour ajouter « J'apprends PHP »
$phrase .= " J'apprends PHP.";
echo $phrase . "<br><br>";

// 4. Déclarer $note = 12 et $Note = 16, puis afficher les deux valeurs
$note = 12;
$Note = 16;
echo "Valeur de \$note : " . $note . "<br>";
echo "Valeur de \$Note : " . $Note . "<br>";
?>