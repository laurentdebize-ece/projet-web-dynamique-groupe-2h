<?php include("fonctions-panier.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon panier</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="../stylesheet/panier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    ajouterCarte($_POST["idCarte"], $_POST["qteCarte"], $donnees["prix"], $donnees["nomCarte"], $donnees["img"]);

    if (creationPanier()) {
        $nbCartes = count($_SESSION["panier"]["idCarte"]);
        echo "<div class='panier'>";
        echo "<p class='intro-panier'>Vous avez " . compterArticle() . " éléments dans le panier.</p>";
        if ($nbCartes <= 0) {
            echo "<p class='intro-panier'>Votre panier est vide</p>";
        } else {
            for ($i = 0; $i < $nbCartes; $i++) {
                echo "<div class='element-panier'>";
                echo "<img src='" . $_SESSION["panier"]["imgCarte"][$i] . "'>";
                echo "<p>Nom de la carte : " . $_SESSION["panier"]["nomCarte"][$i] . "</p>";
                echo "<p> Quantite : " . $_SESSION["panier"]["qteCarte"][$i] . "</p>";
                echo "<p>Prix unitaire : " . $_SESSION["panier"]["prixCarte"][$i] . " €</p>";
                echo "<div class='trash-button'><i class='fa-regular fa-trash-can'></i></div>";
                echo "</div>";
            }
            echo "<p class='total'>Montant total : " . montantGlobal() . " €</p>";
            echo "<button class='valider-panier'>Valider la commande</button>";
        }
        echo "</div>";
    }
    include("footer.php");
    ?>
    <script src="../javascript/menu.js"></script>
</body>
</html>