<?php include("fonctions-panier.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon panier</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../stylesheet/main.css">
</head>
<body>
    <?php
    session_start();
    include("menu.php");
    include("connexion_base.php");
    $id = $_POST["idCarte"];
    $requete = $bdd->prepare("SELECT id, img, prix, nomCarte FROM Carte WHERE id=?");
    $requete->execute([$id]);
    $donnees = $requete->fetch();

    ajouterCarte($_POST["idCarte"], $_POST["qteCarte"], $donnees["prix"], $donnees["nomCarte"]);
    echo $donnees["nomCarte"];

    if (creationPanier()) {
        $nbCartes = count($_SESSION["panier"]["idCarte"]);
        echo $nbCartes;
        if ($nbCartes <= 0) {
            echo "<p>Votre panier est vide</p>";
        } else {
            echo "<ul>";
            for ($i = 0; $i < $nbCartes; $i++) {
                echo "<li>";
                echo $_SESSION["panier"]["nomCarte"][$i];
                echo "</li>";
            }
            echo "</ul>";
        }
    }
    ?>
    <script src="../javascript/menu.js"></script>
</body>
</html>