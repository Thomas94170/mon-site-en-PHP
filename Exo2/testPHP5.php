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

    session_start();
    if (!isset($_SESSION['chiffreAleatoire'])) {
        $_SESSION['chiffreAleatoire'] = rand(1, 100);
    }

    ?>
    <br><br>
    <h1 class="fst-italic text-warning text-center">Mon cinquième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Trouver le bon nombre (entre 1 et 100)</h2>


    <br><br>
    <div class="d-flex justify-content-center">
        <form action="#" method="POST">
            <br>
            <div class="mb-3 text-warning text-center">
                <label for="chiffre" class="form-label text-warning">Devinez!</label>
                <input type="number" class="form-control" id="chiffre" name="chiffre" required>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <br>
        </form>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form action="#" method="POST">
            <div class="mb-3 text-warning text-center d-flex justify-content-center">
                <input type="hidden" name="erase" value="yes">
                <button type="submit" class="btn btn-warning">Réinitialiser</button>
            </div>
        </form>
    </div>


    <div class="fst-italic text-warning text-center border border-warning table">
        <?php

        if (isset($_POST['erase']) && $_POST['erase'] === "yes") {
            $_SESSION['chiffreAleatoire'] = rand(1, 100);
        }
        // echo $_SESSION['chiffreAleatoire'];
        $nbreAleatoire = $_SESSION['chiffreAleatoire'];


        if (isset($_POST['chiffre']) && $_POST['chiffre'] > 0) {
            $chiffreSaisi = (int)$_POST['chiffre'];
            if ($nbreAleatoire === (int)$_POST['chiffre']) {
                echo "<p class='fst-italic text-warning text-center'>Trouvé!</p>";
            } elseif ($chiffreSaisi < $nbreAleatoire) {
                echo "<p class='fst-italic text-warning text-center'>Ton chiffre est plus petit que la bonne réponse</p>";
            } elseif ($chiffreSaisi > $nbreAleatoire) {
                echo "<p class='fst-italic text-warning text-center'>Ton chiffre est plus grand que la bonne réponse</p>";
            }
        } else {
            echo "<p class='fst-italic text-warning text-center'>Donne un chiffre!</p>";
        }
        ?>

    </div>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- en php un nombre aléatoire se fait avec rand(min,max) -->
<!-- (int) précise un nombre -->