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
        <form action="#" method="POST">
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
        if (isset($_POST['nb']) && $_POST['nb'] > 0) {
            $nbreNotes = intval($_POST['nb']);
            var_dump($nbreNotes);
            echo '<div class="d-flex justify-content-center">';
            echo '<form action="#" method="POST">';
            for ($i = 1; $i <= $nbreNotes; $i++) {
                echo "<br/>";
                echo '<div class="text-warning text-center">';
                echo '<label for="note"' . $i . 'class="form-label text-warning">' . $i . '</label>';
                echo '<input type="number" class="form-control" id="note"' . $i . 'name="note"' . $i . 'required></div>';
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
        ?>

    </div>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- dans cet exercice, il faut générer des formulaires suivant le nbre de notes que nous renseignons,
je stocke la récup de la note avec $_POST['note'] dans une variable $nbreNotes
pour générer le nbre d input voulu, il faut utiliser une boucle for -->