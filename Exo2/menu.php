<!-- template avec php, nous allons ici mettre notre navbar qui va se répéter sur nos différentes pages lorsque nous l'appellerons dans une balise php avec include ("nomDeLaPage.php") -->

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand text-warning" href="https://www.php.net/">PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-warning" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP.php">Exercice 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP2.php">Exercice 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP3.php">Exercice 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP4.php">Exercice 4</a>
                </li>
            </ul>
        </div>
    </div>
</nav>