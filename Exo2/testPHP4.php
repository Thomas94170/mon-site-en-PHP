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
    <h1 class="fst-italic text-warning text-center">Mon quatrième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">IMC : Indice de Masse corporelle</h2>
    <br><br>
    <p class="fst-italic text-warning text-center">Calcul = poids (kg) / taille² (m)</p>

    <br><br>
    <div class="d-flex justify-content-center">
        <form action="#" method="POST">
            <div class="mb-3 text-warning text-center">
                <label for="poids" class="form-label text-warning">Poids en kg (chiffre arrondi) : </label>
                <input type="number" class="form-control" id="poids" name="poids" required>
            </div>
            <br>
            <div class="mb-3 text-warning text-center">
                <label for="taille" class="form-label text-warning">taille en cm : </label>
                <input type="number" class="form-control" id="taille" name="taille" required>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <br><br><br>

        </form>
    </div>
    <br><br>

    <div class="fst-italic text-warning text-center border border-warning table">
        <?php
        if (isset($_POST['poids']) && ($_POST['taille'])) {
            $imc = ($_POST['poids'] / ($_POST['taille'] * ($_POST['taille']))) * 10000;
            echo "<p> L'imc est de  : " . $imc . "</p>";
        } else {
            echo "<h3 class='fst-italic text-warning text-center'>Saisissez un chiffre!</h3>";
        }
        ?>

    </div>
    <br><br>
    <p class="fst-italic text-warning text-center">L'IMC permet de determiner la corpulence d'une personne.</p>
    <p class="fst-italic text-warning text-center">La même formule est utilisée pour le calcul de l'IMC de la femme et de l'homme.</p>
    <p class="fst-italic text-warning text-center">L'Organisation Mondiale de la Santé (OMS) a défini cet Indice de Masse Corporelle comme le standard pour évaluer les risques liés au surpoids.</p>
    <p class="fst-italic text-warning text-center">moins de 18,5 : Insuffisance pondérale (maigreur)</p>
    <p class="fst-italic text-warning text-center">18,5 à 25 : Corpulence normale</p>
    <p class="fst-italic text-warning text-center">25 à 30 : Surpoids</p>
    <p class="fst-italic text-warning text-center">30 à 35 : Obésité modérée</p>
    <p class="fst-italic text-warning text-center">35 à 40 : Obésité sévère</p>
    <p class="fst-italic text-warning text-center">+ de 40 : Obésité morbide ou massive</p>




    <br>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>