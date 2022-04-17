<?php
$nomDuJoueur1 = "Adam";
$monAge = 2;
$garcon = true;

$nomDuJoueur2 = "Aida";
$monAge2 = 3;
$garcon2 = false;



echo "<br>";
afficherJoueur($nomDuJoueur1, $monAge, $garcon);
afficherJoueur($nomDuJoueur2, $monAge2, $garcon2);

function afficherJoueur($nom, $age, $homme)
{


    echo "Nom du joueur : " . $nom;
    echo "<br/>";
    echo "Age du joueur : " . $age;
    $age = $age + 1;
    echo "<br/>";
    echo "Age du joueur + 1 : " . $age;
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
echo "<br>";

function test($d)
{
    $a = 5;
    $b = 7;
    $c = 2;
    return $a + $b * $c + $d;
}
echo "<br>";
$text = test(2);
echo $text;

?>

<p>mon appel s'affiche au dessus ou en dessous il suffit de l appeler ou on veut</p>
<p> pour afficher plusieurs joueurs, il suffit de déclarer des var leurs correspondants et les appeler avec leurs var propres</>

    <!-- dans les functions on peut aussi retourner des valeurs -->
    <!-- pour afficher le return de ma fonction test, je dois faire un echo de ma fonction  -->
    <!-- echo test(); -->
    <!-- seconde solution on peut stocker l'appel de function test dans une variable -->