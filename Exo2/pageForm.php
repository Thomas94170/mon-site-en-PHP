<!DOCTYPE html>


<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pageForm.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($_GET["nom"] || $_GET["age"]) {
        echo "<p class ='text-white text-center'> Welcome</p>";
        echo "<p class ='text-white text-center'>" . $_GET['nom'] . "</p>";
        echo  "<br />";
        echo "<p class ='text-white text-center'>Tu as</p>";
        echo "<p class ='text-white text-center'>" . $_GET['age'] . " ans";
        "</p>";
        echo "<br/>";
        echo "<br/>";
        echo "<p class ='text-white text-center'>la méthode GET récupère les infos et les affichent dans la barre URL, contrairement à la méthode POST</p>";



        exit();
    }
    ?>


</body>

</html>