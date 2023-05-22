<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>catalogue</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../stylesheet/catalogue.css">
    <link rel="stylesheet" href="../stylesheet/main.css">
</head>
<body>

<?php include('menu.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = 1;
}

$requete = $bdd->prepare("SELECT id, img, prix, nomCarte, description_carte, partenaire FROM Carte WHERE id=?");
$reponse = requete->execute([$id]);
$donnees = $reponse->fetch();

?>
<div class="main">
    <div class="image-carte">
        <img src="<?php echo $donnees['img']; ?>" alt="Carte">
    </div>
    <div class="carte-conteneur-droite">
        <h2>
            <?php echo $donnees['nomCarte']; ?>
        </h2>
        <div class="conteneur-central">
            <p>
                <?php echo $donnees['description_carte']; ?>
            </p>
        </div>
        <div></div>
    </div>
</div>

<?php

include('footer.php') ?>
<script src="../javascript/menu.js"></script>

</body>
</html>
