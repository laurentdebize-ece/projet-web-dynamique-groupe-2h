<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>catalogue</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../stylesheet/catalogue_en_savoir_plus.css">
    <link rel="stylesheet" href="../stylesheet/main.css">
</head>
<body>

<?php include('menu.php');
include('connexion_base.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = 1;
}

$requete = $bdd->prepare("SELECT id, img, prix, nomCarte, description_carte, partenaire FROM Carte WHERE id=?");
$requete->execute([$id]);
$donnees = $requete->fetch();

?>
<div class="main">
    <div class="image-carte">
        <img src="<?php echo $donnees['img']; ?>" alt="Carte">
    </div>
    <div class="carte-conteneur-droite">
        <h2 class="titre-carte">
            <?php echo $donnees['nomCarte']; ?>
        </h2>
        <div class="conteneur-central-carte-description">
            <div class="conteneur-central">
                <p>
                    <?php echo $donnees['description_carte']; ?>
                </p>
            </div>
            <div class="conteneur-central">
                <p>
                    Prix : <?php echo $donnees['prix']; ?> €
                </p>
                <form method="POST" action="panier.php" class="forme">
                    <input type="hidden" name="idCarte" value="<?php echo $donnees['id']; ?>">
                    <input type="number" name="qteCarte" value="1">
                    <input type="submit" class="appliquer" value="Ajouter au panier">
                </form>
            </div>
        </div>
        <p>A utiliser auprès de ces partenaires : <?php echo $donnees['partenaire']; ?></p>
    </div>
</div>

<?php

include('footer.php') ?>
<script src="../javascript/menu.js"></script>
<script src="../javascript/catalogue_en_savoir_plus.js"></script>
</body>
</html>
