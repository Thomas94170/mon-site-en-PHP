<?php
$nomDuJoueur1 = "Adam";
$monAge = 17;
$garcon = true;

$nomDuJoueur2 = "Aida";
$monAge2 = 18;
$garcon2 = false;

define("MACONSTANTE", "£");



sautDeLigne(MACONSTANTE);
afficherJoueur($nomDuJoueur1, $monAge, $garcon);
sautDeLigne("$");
afficherJoueur($nomDuJoueur2, $monAge2, $garcon2);
sautDeLigne("*");
ageMajorite($monAge);
sautDeLigne(MACONSTANTE);
ageMajorite($monAge2);

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

function afficherLePlusAge($monAge, $monAge2)
{
    if ($monAge < $monAge2) {
        echo "<h3>$monAge est plus jeune que $monAge2 </h3>";
    } else {
        echo "<h4>$monAge est plus vieux que $monAge2</h4>";
    }
}

afficherLePlusAge($nomDuJoueur1, $nomDuJoueur2);


function sautDeLigne($separateur)
{
    echo "<br>";
    // for ($i = 0; $i < 10; $i++) {
    //     echo $separateur;
    // }
    $i = 0;
    while ($i < 50) {
        // $i = $i + 1;
        $i++;

        echo "$separateur";
    }
    // echo "----------";
    // echo "<br>";
    // echo "**********";
    echo "<br>";
}



function calculDiffAge($monAge, $monAge2)
{
    $resultat = $monAge - $monAge2;
    if ($resultat < 0) {
        $resultat = -$resultat;
    }
    return $resultat;
}

$diffAge = calculDiffAge($monAge, $monAge2);
echo "la différence d'age est de $diffAge an(s). ";


function ageMajorite($age)
{
    switch ($age) {
        case 20:
        case 19:
            echo "le joueur est majeur";
            break;
        case 18:
            echo "le joueur vient d'avoir 18 ans";
            break;
        case 17:
            echo "le joueur est mineur mais il peut jouer";
            break;
        case 16:
            echo "le joueur est mineur et ne peut pas jouer";
            break;
        default:
            echo "le joueur n'a pas donné son age, accès interdit";
            break;
    }
}



?>

<!-- boucle for  -->
<!-- calcul, de la différence d 'age entre nos 2 joueurs -->
<!-- avec la function calculDiffAge qui prend en param l age de nos 2 joueurs -->
<!-- dans notre cas l age du joueur 1 est inf a celui du joueur 2 donc comment faire pour ne pas avoir un resultat négatif -->

<!-- les constantes -->
<!-- nous allons gérer des espacements avec une constante $maConstante -->
<!-- une constante est une variable qui est immuable -->
<!-- en PHP on défini une constante de la maniere suivante -->
<!-- define ("MACONSTANTE", "£");  (son nom, sa valeur)-->

<!-- les tests en détail et le switch case -->
<!-- nous allons voir qui est majeur entre les 2 joueurs -->
<!-- les switch sont une maniere plus facile qu un if else if else, il permet de detailler ce que l on veut -->
<!-- astuce si on veut pour plusieurs ages, definir le mm message, voir age 20 et 19 -->

<!-- la boucle while (tant que) -->
<!-- la boucle sert à répéter une action tant qu'elle n a pas été atteinte -->