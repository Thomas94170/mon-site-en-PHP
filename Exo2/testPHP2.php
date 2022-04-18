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
    <h1 class="fst-italic text-warning text-center">Mon second exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">La pyramide d'éléphants</h2>
    <br><br>
    <div class="d-flex justify-content-center">
        <form action="#" method="POST">
            <div class="mb-3 text-white text-center">
                <label for="hauteur" class="form-label text-warning">Hauteur de la Pyramide : </label>
                <input type="number" class="form-control" id="hauteur" name="hauteur" required>
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
        if (isset($_POST['hauteur']) && $_POST['hauteur'] > 0) {
            $hauteur = $_POST['hauteur'];
            echo "<p>La hauteur est de : " . $hauteur . "</p>";
            $txt = "";
            for ($i = 0; $i < $hauteur; $i++) {
                $txt .= "🐘🐘";
                echo $txt . "<br/>";
            }
            // pyramide négative
            // for($i = 0; $i <$hauteur-1; $i++){
            // $txt = substr($txt,0,strlen($txt)-2);
            // echo $txt . "<br/>";
            // }
        } else {
            echo "<p class='fst-italic text-warning text-center'>Saisissez un chiffre!</p>";
        }
        ?>

    </div>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- utilisation de la méthode post qui est similaire à la méthode Get -->
<!-- explication de mon if : si ma hauteur est défini (récupération par méthode post de l id hauteur et qu'elle 
est supérieur à 0, je défini une variable $hauteur qui contient le chiffre que je renseigne) -->
<!-- j'affiche par écho sa hauteur par $hauteur -->

<!-- ma pyramide négative: processus dans l autre sens , on recule de 1 
avec la function substring 0 determine l indice 0, pour savoir la taille de notre chaine on utilise strlen() de $txt -2-->