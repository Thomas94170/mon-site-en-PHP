<?php
$nomDuJoueur1 = "Adam";
$age = 2;
$garcon = true;
$fille = false;
?>

<p>Age du joueur 1 : <?php echo $nomDuJoueur1 ?></p>
<p>Age du joueur 1 : <?php echo $age ?></p>
<?php $age = $age + 1 ?>
<p>Age du joueur 1 + 1 an : <?php echo $age ?></p>


<?php
if ($garcon) {
    echo "<p>c'est un garçon</p>";
} else {
    echo "<p>c'est une fille</p>";
}

if ($fille) {
    echo "<p> c'est une fille</p>";
} else {
    echo "<p>c'est un garçon</p>";
}
?>

<style>
    p {
        color: skyblue;
        font-size: 20px;
    }
</style>