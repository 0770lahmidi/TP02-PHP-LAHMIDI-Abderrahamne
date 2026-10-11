# TP02-PHP-LAHMIDI-Abderrahamne
TP 02 PHP — Programmation Web 2 — 2026/2027
# TP 02 : Programmation Web 2 — PHP

- **nom:** LAHMIDI
- **Prénom :** Abderrahamane
- **Groupe :** [Groupe4]

## Liste des Exercices

- **Exercice 1 :** `ex01.php`
- **Exercice 2 :** `ex02.php`
  En PHP, les noms de variables sont sensibles à la casse (case-sensitive). Par conséquent, $note (entièrement en minuscules) et $Note (avec une majuscule) sont considérées comme deux variables totalement indépendantes.

  $a : Valide (commence par une lettre).   
  $_a : Valide (commence par un underscore).   
  $a_a : Valide (composé de lettres et d'un underscore).   
  $AAA : Valide (en majuscules).
  $a! : Invalide (contient un point d'exclamation, caractère spécial interdit).
  $1a : Invalide (commence par un chiffre, ce qui est interdit en PHP)[cite: 1].
  $al : Valide.

- **Exercice 3 :** `ex03.php`
- **Exercice 4 :** `ex04.php`
  Différence d'affichage de false entre echo et var_dump() :

  Avec echo, la valeur booléen false est convertie en une chaîne vide, ce qui fait qu'elle n'affiche rien à l'écran (tandis que true est converti en 1).

  Avec var_dump(), des informations détaillées sont affichées, indiquant explicitement le type (bool) et la valeur exacte (false).

- **Exercice 5 :** `ex05.php`
Pour -1 : Note invalide
Pour 9 : Non validé
Pour 10 : Passable
Pour 12 : Assez bien
Pour 14 : Bien
Pour 16 : Très bien
Pour 21 : Note invalide

- **Exercice 6 :** `ex06.php`
- **Exercice 7 :** `ex07.php`
- **Exercice 8 :** `ex08.php`
- **Exercice 9 :** `ex09.php`
- **Exercice 10 (GET) :** `ex10_get.html` / `ex10_get.php`
  Avec la méthode GET, les valeurs saisies apparaissent directement visible dans l'URL du navigateur (sous la forme ?nom=...&prenom=...&groupe=...)

- **Exercice 10 (POST) :** `ex10_post.html` / `ex10_post.php`
  Avec la méthode POST, l'URL reste propre et ne contient aucune donnée de formulaire, car les informations sont transmises de manière masquée dans l'en-tête de la requête HTTP