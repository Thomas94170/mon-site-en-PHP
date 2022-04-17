<!-- comment lier du html avec php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html avec PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
    <?php
    include("menu.php")

    ?>
    <br><br>
    <h1 class="fst-italic text-warning text-center">Mon site d'exercice sur PHP</h1>
    <br><br>
    <h2 class="fst-italic text-warning text-center">HTML et CSS avec PHP</h2>
    <br><br>
    <p class="fst-italic text-warning text-center"></p>
    <br><br>
    <div class="d-flex justify-content-center">
        <img src="cours3.png" alt="imagePHP" srcset="" height="300px" width="auto">
    </div>
    <br><br><br>
    <h2 class="fst-italic text-warning text-center">La méthode GET</h2>
    <br>
    <div class="">
        <br>
        <p class="fst-italic text-warning text-center">
            Elle envoie les informations utilisateur codées ajoutées à la demande de page. La page et les informations codées sont séparées par le caractère ?.
        </p>
        <p class="fst-italic text-warning text-center">
            http://www.test.com/index.htm?name1=value1&name2=value2
        </p>
    </div>

    <p class="fst-italic text-warning text-center">
        La méthode GET produit une chaîne longue qui apparaît dans les journaux de votre serveur, dans la zone Emplacement: du navigateur.

        La méthode GET est limitée à l’envoi de 1024 caractères uniquement.

        N’utilisez jamais la méthode GET si vous avez un mot de passe ou d’autres informations sensibles à envoyer au serveur.

        GET ne peut pas être utilisé pour envoyer des données binaires, telles que des images ou des documents Word, au serveur.

        Les données envoyées par la méthode GET sont accessibles à l’aide de QUERY_STRING variable d’environnement.

        Le PHP fournit $_GET tableau associatif pour accéder à toutes les informations envoyées à l’aide de la méthode GET.
    </p>
    <br><br>

    <h2 class="fst-italic text-warning text-center">La méthode POST</h2>
    <br>

    <p class="fst-italic text-warning text-center">
        La méthode POST transfère des informations via des en-têtes HTTP. Les informations sont codées comme décrit dans le cas
        de la méthode GET et placées dans un en-tête appelé QUERY_STRING.
        La méthode POST n’a aucune restriction sur la taille des données à envoyer.

        La méthode POST peut être utilisée pour envoyer des données ASCII ainsi que des données binaires.

        Les données envoyées par la méthode POST passent par l’en-tête HTTP, de sorte que la sécurité dépend du protocole HTTP.
        En utilisant Secure HTTP, vous pouvez vous assurer que vos informations sont sécurisées.

        Le PHP fournit $_POST tableau associatif pour accéder à toutes les informations envoyées à l’aide de la méthode POST.
    </p>
    <br><br><br>

    <div class="d-flex justify-content-center">
        <form action="pageForm.php" method="GET">
            <div class="mb-3 text-white text-center">
                <label for="nom" class="form-label">Votre Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text text-white"></div>
            </div>
            <div class="mb-3 text-white text-center">
                <label for="age" class="form-label">Votre âge</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" class="form-check-input d-flex justify-content-center" id="exampleCheck1">
                <label class="form-check-label text-white text-center d-flex justify-content-center" for="exampleCheck1">Check me out</label>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br><br><br>

        </form>
    </div>








    <?php
    include("footer.php");
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- navbar avec php -->