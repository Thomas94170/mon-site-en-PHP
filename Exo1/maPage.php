<!-- Une variable simple -->
<?php
$nomDuJoueur1 = "Adam";
$age = 2;
$garcon = true;
$fille = false;


echo "Nom du joueur 1 : " . $nomDuJoueur1;
echo "<br/>";
echo "Age du joueur 1 : " . $age;
$age = $age + 1;
echo "<br/>";
echo "Age du joueur 1 + 1 : " . $age;
echo "<br/>";
if ($garcon) {
    echo "ma variable est true, c est un garçon";
}
echo "<br/>";
if ($fille) {
    echo "c'est une fille";
} else {
    echo "la variable fille n est pas true, c'est un garçon";
}

echo "<br/>";
if ($garcon === true) {
    echo "<h3>avec le === true ca marche aussi</h3>";
} else {
    echo "ça ne marche pas";
}
?>




<style>
    h3 {
        color: red;
    }
</style>

<!-- en PHP on défini une variable avec $  -->
<!-- = est une assignation qui peut etre modifié a n importe quel moment  -->
<!-- echo est une instruction d'affichage en PHP -->
<!--Utiliser des variables sert à pouvoir modifier facilement les infos pour pouvoir les modifier  -->
<!-- lors d un ajout à une variable, il faut refaire un echo pour avoir la nouvelle valeur, car la modif est éxécutée apres la définition de la premiere var age -->

<!--  -->

<!-- Les types de variables et un premier test simple -->
<!-- les différentes variables: string qui est une chaine de caractere écrit entre ""-->
<!-- number qui est un nombre ex 2. si je mets "2" cela devient un string -->
<!-- booléen qui est soit true soit false -->
<!-- dans mon if ($fille) ici par défaut on dit si $fille est true, mais dans la def de ma var la valeur est a false -->
<!-- on peut aussi l'ecrire d une maniere différente -->

<!--  -->