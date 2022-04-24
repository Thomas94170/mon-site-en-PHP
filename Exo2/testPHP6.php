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
    <h1 class="fst-italic text-warning text-center">Mon sixième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Calculer sa moyenne</h2>


    <br><br>
    <div class="d-flex justify-content-center">
        <form action="#" method="GET">
            <br>
            <div class="mb-3 text-warning text-center">
                <label for="nb" class="form-label text-warning">Combien de notes?</label>
                <input type="number" class="form-control" id="nb" name="nb" required>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <br>
        </form>
    </div>
    <br>



    <div class="fst-italic text-warning text-center border border-warning">
        <?php
        if (isset($_GET['nb']) && $_GET['nb'] > 0) {
            $nbreNotes = $_GET['nb'];
            // var_dump($nbreNotes);
            echo '<div class="d-flex justify-content-center">';
            echo '<form action="#" method="GET">';
            for ($i = 1; $i <= $nbreNotes; $i++) {
                echo "<br/>";
                echo '<div class="text-warning text-center">';
                echo "<label for= \"note" . $i . "\">Note" . $i . ": </label>";
                echo "<input type=\"number\" name=\"note" . $i . "\" id= \"note" . $i . "\" required></div>";
                echo "<br/>";
            }
            echo '<div class="d-flex justify-content-center">';
            echo '<button type="submit" class="btn btn-warning">Calculer</button>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '<br/>';
        } else {
            echo "<p class='fst-italic text-warning text-center'>Renseigner le nombre de notes!</p>";
        }
        if (isset($_GET['note1'])) {
            //var_dump($_GET['note']);
            $i = 1;
            $res = 1;
            do {
                $res += $_GET['note' . $i];
                echo "<p> note $i. =" . $_GET['note' . $i] . "</p>";
                $i++;
            } while (isset($_GET['note' . $i]));
            echo "<p class='fst-italic text-warning text-center'>La moyenne est de : " . $res / ($i - 1);
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

<!-- dans cet exercice, il faut générer des formulaires suivant le nbre de notes que nous renseignons,
je stocke la récup de la note avec $_GET['note'] dans une variable $nbreNotes
pour générer le nbre d input voulu, il faut utiliser une boucle for -->

<!-- il faut passer dans cet exercice à la méthode GET car elle conserve les champs saisies e,tre les différentes de saisies de formulaires  -->
<!-- chapitre 33 pour revenir dessus
 -->