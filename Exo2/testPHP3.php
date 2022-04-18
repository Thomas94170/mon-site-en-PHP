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
    <h1 class="fst-italic text-warning text-center">Mon troisième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Cercle : Périmètre et Aire</h2>
    <br><br>
    <p class="fst-italic text-warning text-center">Périmètre = ℼ x R</p>
    <br>
    <p class="fst-italic text-warning text-center">Aire = ℼ x R x R</p>
    <br><br>
    <div class="d-flex justify-content-center">
        <form action="#" method="POST">
            <div class="mb-3 text-warning text-center">
                <label for="cercle" class="form-label text-warning">Rayon d'un cercle : </label>
                <input type="number" class="form-control" id="cercle" name="cercle" required>
            </div>
            <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" class="form-check-input d-flex justify-content-center" id="perimetre" name="perimetre" checked>
                <label class="form-check-label text-warning text-center d-flex justify-content-center" for="exampleCheck1"> Périmètre</label>
            </div>
            <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" class="form-check-input d-flex justify-content-center" id="aire" name="aire" checked>
                <label class="form-check-label text-warning text-center d-flex justify-content-center" for="exampleCheck1"> Aire</label>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <br><br><br>

        </form>
    </div>

    <br>
    <div class="fst-italic text-warning text-center border border-warning table">
        <?php
        if (isset($_POST['cercle']) && $_POST['cercle'] > 0) {
            $rayon = $_POST['cercle'];
            echo "<p> Résultat : </p>";
            if (isset($_POST['perimetre'])) {
                $perimetre = 3.14 * $_POST['cercle'];
                echo "<p> notre périmètre est de : " . $perimetre . "</p>";
            } else {
                echo "<p class='fst-italic text-warning text-center'>Case du périmètre non cochée!</p>";
            }
            if (isset($_POST['aire'])) {
                $aire = 3.14 * $_POST['cercle'] * $_POST['cercle'];
                echo "<p> notre aire est de : " . $aire . "</p>";
            } else {
                echo "<p class='fst-italic text-warning text-center'>Case de l'aire non cochée!</p>";
            }
        } else {
            echo "<h3 class='fst-italic text-warning text-center'>Saisissez un chiffre!</h3>";
        }
        ?>

    </div>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>