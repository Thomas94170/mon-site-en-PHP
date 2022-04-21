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
    <h1 class="fst-italic text-warning text-center">Mon septième exercice avec PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">Sélection du personnage</h2>


    <br><br>
    <div class="d-flex justify-content-center fst-italic text-warning text-center">
        <form action="#" method="POST">
            <label for="nb" class="form-label text-warning">Animal :</label>
            <select name="animal" id="animal">
                <option value="aigle">Aigle</option>
                <option value="cerf">Cerf</option>
                <option value="tigre">Tigre</option>
                <option value="perroquet">Perroquet</option>
                <option value="lezard">Lézard</option>
            </select>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </form>
        <br>
    </div>
    <br>



    <div class="fst-italic text-warning text-center border border-warning">
        <?php
        if (isset($_POST['animal'])) {
            if ($_POST['animal'] === "aigle") {
                echo "<img src='./img/aigle.jpg' alt='aigle' srcset='' height='200px' width='auto'>";
            } elseif ($_POST['animal'] === "cerf") {
                echo "<img src='./img/cerf.jpg' alt='aigle' srcset='' height='200px' width='auto'>";
            } elseif ($_POST['animal'] === "tigre") {
                echo "<img src='./img/tigre.jpg' alt='aigle' srcset='' height='200px' width='auto'>";
            } elseif ($_POST['animal'] === "perroquet") {
                echo "<img src='./img/perroquet.jpg' alt='aigle' srcset='' height='200px' width='auto'>";
            } elseif ($_POST['animal'] === "lezard") {
                echo "<img src='./img/lezard.jpg' alt='aigle' srcset='' height='200px' width='auto'>";
            }
        } else {
            echo "<p class='fst-italic text-warning text-center'>Choisis ton animal!</p>";
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
<!-- pour afficher les images il suffit de faire un if, else if -->