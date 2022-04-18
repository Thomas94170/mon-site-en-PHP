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
    <h1 class="fst-italic text-warning text-center">Mon premier exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Les tables de multiplication</h2>
    <br><br>
    <div class="d-flex justify-content-center">
        <form action="#" method="GET">
            <div class="mb-3 text-white text-center">
                <label for="number" class="form-label text-warning">Quelle chiffre?</label>
                <input type="number" class="form-control" id="number" name="number" required>
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
        if (isset($_GET["number"])) {
            echo "<h3 class='fst-italic text-warning text-center'> Table de " . $_GET["number"] . "</h3>";
            for ($i = 0; $i <= 10; $i++) {
                echo $i . "*" . $_GET["number"] . "=" . $i * $_GET["number"] . "<br/>";
            }
        } else {
            echo "<h3 class='fst-italic text-warning text-center'>Saisissez un chiffre!</h3>";
        }
        ?>

    </div>






    <br><br>
    <?php
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>