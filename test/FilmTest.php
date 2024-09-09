<?php
require_once 'src/Film.php';
require_once 'src/Acteur.php';

// Instancer la classe Film
$film1 = new Film("Ducobu", "test", DateTime::createFromFormat("d/m/Y", "20/05/2017"));

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getAnciennete();

echo PHP_EOL;
$film1->setActeur(new Acteur("Martinez", "test"));

// Afficher le nom des acteurs
foreach ($film1->getActeurs() as $acteur) {
    echo $acteur->getNom();
}