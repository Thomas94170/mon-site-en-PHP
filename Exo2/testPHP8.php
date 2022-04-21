<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("menu.php");



    ?>
    <br><br>
    <h1 class="fst-italic text-warning text-center">Mon huitième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Sélection du personnage</h2>


    <br><br>
    <div class=" fst-italic text-warning text-center">
        <h3 class="fst-italic text-warning text-center">Etape 1</h3>
        <p>Réaliser un tableau contenant les valeurs: 2,6,12,5,26,24,40,60</p>
        <br>
        <div class=" fst-italic text-warning text-center">
            <h3 class="fst-italic text-warning text-center">Etape 2</h3>
            <p>Réaliser une fonction vérifiant si un tableau ne contient que des valeurs paires ou non</p>
            <br>
            <div class=" fst-italic text-warning text-center">
                <h3 class="fst-italic text-warning text-center">Etape 3</h3>
                <p> Afficher un message pour l'indiquer à l'utilisateur</p>
                <br>


            </div>
            <br>



            <div class="fst-italic text-warning text-center border border-warning">
                <?php
                $monTableau = [2, 6, 12, 5, 26, 24, 40, 60];
                echo "<h3 class='fst-italic text-warning text-center'>Résultat : </h3>";
                if (nbrePaireTab($monTableau) === true) {
                    echo "<p class='fst-italic text-warning text-center'>Le tableau ne contient que des valeurs paires!</p>";
                } else {
                    echo "<p class='fst-italic text-warning text-center'>Le tableau contient un nombre impair minimum</p>";
                    echo "<p class='fst-italic text-warning text-center'>En modifiant les valeurs de mon tableau, l autre message s'affichera</p>";
                }

                function nbrePaireTab($tableau)
                {
                    for ($i = 0; $i < count($tableau); $i++) {
                        if ($tableau[$i] % 2 !== 0) {
                            return false;
                        }
                    }
                    return true;
                }
                ?>

            </div>



            <?php
            include("footer.php");
            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


<!-- Etape 1 : je mets mon tableau dans une variable ($monTableau) -->

<!-- Etape 2 : je crée une fonction me déterminant si il y a un chiffre impaire dedans 
j'appelle deja ma fonction en mettant ma var $monTableau en parametre-->
<!-- construction de la function je mets en param une var $tableau (c est le nom qu a $monTableau dedans, je pourrais l appeler n importe comment)
dans ma fonction je fais un for avec une $i = 0 que je vais faire arreter à la derniere valeur du tableau en faisant un count($tableau) et en l 'incrémentant
$i =0 correspond au premier index de mon tableau donc au debut de mon tableau-->
<!-- on utilise un modulo pour savoir s il y a un reste
la je fais un modulo en divisant par 2, si le reste est de 0 alors mon chiffre sera paire, si en faisant le modulo le reste est de 1 alors le chiffre sera impair -->
<!-- !== veut dire est différent de 0 -->
<!-- le return true est en dehors de mon for comme ca s il n y a que des chiffres paires, il sort de ma condition, il sort de ma function et va afficher le true de mon if -->