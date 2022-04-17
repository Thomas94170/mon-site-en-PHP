<?php

$joueur1 = [
    "nom" => "Adam",
    "age" => 17,
    "garcon" => true
];

$joueur2 = [
    "nom" => "Aida",
    "age" => 18,
    "garcon" => false
];

$joueur3 = [
    "nom" => [
        "Nom" => "thomas",
        "Prenom" => "ilyes"
    ],
    "age" => 37,
    "garcon" => true
];

afficherTableau($joueur1);
afficherTableau($joueur2);
afficherTableau($joueur3);

// print_r($joueur1);

// $nomDuJoueur1 = "Adam";
// $monAge = 17;
// $garcon = true;

// $nomDuJoueur2 = "Aida";
// $monAge2 = 18;
// $garcon2 = false;

define("MACONSTANTE", "£");




afficherJoueur($joueur1["nom"], $joueur1["age"], $joueur1["garcon"]);

afficherJoueur($joueur2["nom"], $joueur2["age"], $joueur2["garcon"]);
// sautDeLigne("*");
// ageMajorite($monAge);
// sautDeLigne(MACONSTANTE);
// ageMajorite($monAge2);

function afficherJoueur($nom, $age, $homme)
{


    echo "Nom du joueur : " . $nom;
    echo "<br/>";
    echo "Age du joueur : " . $age;
    $age = $age + 1;
    echo "<br/>";
    // echo "Age du joueur + 1 : " . $age;
    echo "<br/>";
    if ($homme) {
        echo "ma variable est true, c est un garçon";
    } else {
        echo "c est une fille";
    }
    echo "<br/>";


    if ($homme === true) {
        echo "<h3>avec le === true ca marche aussi</h3>";
    } else {
        echo "ça ne marche pas";
    }
}




function calculDiffAge($monAge, $monAge2)
{
    $resultat = $monAge - $monAge2;
    if ($resultat < 0) {
        $resultat = -$resultat;
    }
    return $resultat;
}

$diffAge = calculDiffAge($joueur1["age"], $joueur2["age"]);
echo "la différence d'age est de $diffAge an(s). ";






function afficherTableau($tab)
{
    // $nombreCaseTableau = count($tab);
    // for ($i = 0; $i < $nombreCaseTableau; $i++) {
    //     echo $tab[$i] . "<br/>";
    // }

    foreach ($tab as $value) {
        if (!is_array($value)) {
            echo $value . "<br/>";
        } else {
            afficherTableau($value);
        }
    }
}



// print-r($joueur1) cette commande sert à afficher en dur notre array sur la page
// dans notre function afficherTableau on peut remplacer for par un foreach
// pour notre foreach on determine en param $tab auquel on lui attribue une variable ici $value
// et on l affiche avec notre echo
// si on veut afficher l indice de notre array
// foreach ($tab as $indice => $value) {
    // echo $indice . " : " . $value . "<br/>";
// }

// les tableaux et leurs récursivités

// créer des tableaux à multi-dimensions
