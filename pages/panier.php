<?php include("fonctions-panier.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon panier</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    include("connexion_base.php");
    $id = $_POST["idCarte"];
    $requete = $bdd->prepare("SELECT id, img, prix, nomCarte FROM Carte WHERE id=?");
    $requete->execute([$id]);
    $donnees = $requete->fetch();
    ajouterCarte($_POST["idCarte"], $_POST["qteCarte"], $donnees["prix"]);
    echo $donnees["prix"];

    if (creationPanier()) {
        $nbCartes = count($_SESSION["panier"]["idCarte"]);
        if ($nbCartes <= 0) {
            echo "<p>Votre panier est vide</p>";
        }
    }
    ?>
</body>
</html>