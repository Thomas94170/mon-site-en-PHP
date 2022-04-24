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
    <h1 class="fst-italic text-warning text-center">Mon neuvième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Sélection du personnage</h2>


    <br><br>
    <div class="d-flex justify-content-center fst-italic text-warning text-center">
        <form action="#" method="POST">
            <label for="nb" class="form-label text-warning">Personnage de Street Fighter :</label>
            <select name="perso" id="perso" onchange="submit()">
                <option value="ryu" <?php if (isset($_POST['perso']) && $_POST['perso'] === 'ryu') echo "selected" ?>>Ryu</option>
                <option value="sagat" <?php if (isset($_POST['perso']) && $_POST['perso'] === 'sagat') echo "selected" ?>>Sagat</option>
                <option value="chunli" <?php if (isset($_POST['perso']) && $_POST['perso'] === 'chunli') echo "selected" ?>>Chun-li</option>
                <option value="ken" <?php if (isset($_POST['perso']) && $_POST['perso'] === 'ken') echo "selected" ?>>Ken</option>
                <option value="bison" <?php if (isset($_POST['perso']) && $_POST['perso'] === 'bison') echo "selected" ?>>Mr. Bison</option>
            </select>
            <br>
            <!-- <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div> -->
        </form>
        <br>
    </div>
    <br>



    <div class="fst-italic text-warning text-center border border-warning">
        <?php
        $ryu = ['Ryu', 25, 'Karaté'];
        $sagat = ['Sagat', 35, 'Muay-Thai'];
        $chunli = ['Chun-Li', 22, 'Sanda'];
        $ken = ['Ken', 25, 'Karaté'];
        $bison = ['Mr.Bison', 45, 'Psycho Power'];

        if (!isset($_POST['perso']) || $_POST['perso'] === "ryu") {
            echo "<img src='./img/Ryu.jpg' alt='ryu' srcset='' height='200px' width='auto'>";
            afficherPerso($ryu);
        } elseif ($_POST['perso'] === "sagat") {
            echo "<img src='./img/Sagat.jpg' alt='sagat' srcset='' height='200px' width='auto'>";
            afficherPerso($sagat);
        } elseif ($_POST['perso'] === "chunli") {
            echo "<img src='./img/Chun-Li.jpg' alt='chunli' srcset='' height='200px' width='auto'>";
            afficherPerso($chunli);
        } elseif ($_POST['perso'] === "ken") {
            echo "<img src='./img/Ken.jpg' alt='ken' srcset='' height='200px' width='auto'>";
            afficherPerso($ken);
        } elseif ($_POST['perso'] === "bison") {
            echo "<img src='./img/Bison.jpg' alt='mr.bison' srcset='' height='200px' width='auto'>";
            afficherPerso($bison);
        }




        function afficherPerso($persoStreetFighter)
        {
            echo "<p class='fst-italic text-warning text-center'>Nom : " . $persoStreetFighter[0];
            echo "</p>";
            echo "<br/>";
            echo "<p class='fst-italic text-warning text-center'>Age : " . $persoStreetFighter[1];
            echo "</p>";
            echo "<br/>";
            echo "<p class='fst-italic text-warning text-center'>Art martial : " . $persoStreetFighter[2];
            echo "</p>";
        }

        ?>

    </div>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


<!-- faire un menu déroulant  -->
<!-- dans mon menu déroulant, les balises PHP me permettent quand je selectionne un personnage a ce que le menu déroulant reste sur le personnage selectionné -->
<!-- dans mon menu déroulant, je peux me passer du button pour sélectionner mes personnages, il faut rajouter un onchange="submit()" -->
<!-- pour afficher les images il suffit de faire un if, else if -->
<!-- pour afficher les éléments de mon tableau je dois faire une function -->
<!-- dans ma function je prends en param $persoStreetFighter que je pourrais nommer comme je veux  -->
<!-- je fais ensuite un affichage en reprenant les index de mon tableau -->

<!-- si on renseigne un booléen dans notre tableau( par exemple sexe homme true femme false dans le dernier index de notre tableau) -->
<!-- on fait le code suivant
 if($persoStreetFighter[4]=== true){
     echo "sexe : Homme";
 }else{
     echo "sexe : Femme";
 }
 -->

<!-- dans mon premier if avec !isset cette ligne de code permet de sélectionner par defaut le premier membre de ma liste déroulante -->
<!-- voir chapitre 34 pour les tableaux associatifs, je laisse le code tel quel -->

<!-- voir chapitre 35 pour voir le tableau d un tableau -->