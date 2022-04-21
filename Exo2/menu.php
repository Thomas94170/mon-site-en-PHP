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
                    <a class="nav-link text-warning" href="testPHP.php">Multiplication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP2.php">Pyramide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP3.php">Périmètre/Aire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP4.php">IMC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP5.php">Chiffre mystère</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP6.php">Ma moyenne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="testPHP7.php">Mes personnages</a>
                </li>
            </ul>
        </div>
    </div>
</nav>