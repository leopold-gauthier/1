<?php

require __DIR__ . '/../vendor/autoload.php';

// use App\Helpers\UIHelper;
use App\Models\Livre;

$livreDefault = new Livre("Le Petit Prince", 'Antoine de Saint-Exupéry', 1943);

echo "Livre par défaut : \n";
echo sprintf("Titre: %s \n", $livreDefault->getTitre());
echo sprintf("Auteur: %s \n", $livreDefault->getAuteur());
echo sprintf("Année de publication: %s \n", $livreDefault->getDateDeParution());

// $new = $livreDefault->setTitre("Test");
// echo sprintf("Titre: %s \n", $livreDefault->getTitre());

// Recherche
$termeDeRecherche = "Le Petit Prince";
if ($livreDefault->rechercher($termeDeRecherche)) {
    echo "Le livre a été trouvé !";
} else {
    echo "Le livre n'a pas été trouvé.";
}