<?php include("fonctions-panier.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>GIFTY - Mon panier</title>
    <link rel="stylesheet" href="../stylesheet/panier.css">
    <?php include("head.php") ?>
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

    if (isset($_POST["idCarte"])) {
        ajouterCarte($_POST["idCarte"], $_POST["qteCarte"], $donnees["prix"], $donnees["nomCarte"], $donnees["img"]);
    }

    if (isset($_POST["remove"])) {
        supprimerCarte($_POST["remove"]);
    }

    if (creationPanier()) {
        $nbCartes = compterArticle();
        echo "<div class='panier'>";
        echo "<p class='intro-panier'>Vous avez " . $nbCartes . " éléments dans le panier.</p>";
        if ($nbCartes <= 0) {
            echo "<p class='intro-panier'>Votre panier est vide</p>";
        } else {
            for ($i = 0; $i < $nbCartes; $i++) {
                echo "<div class='element-panier'>";
                echo "<img src='" . $_SESSION["panier"]["imgCarte"][$i] . "'>";
                echo "<p>Nom de la carte : " . $_SESSION["panier"]["nomCarte"][$i] . "</p>";
                echo "<p> Quantite : " . $_SESSION["panier"]["qteCarte"][$i] . "</p>";
                echo "<p>Prix unitaire : " . $_SESSION["panier"]["prixCarte"][$i] . " €</p>";
                echo "<form action='panier.php' method='post'><input name='remove' type='hidden' value='" . $_SESSION["panier"]["idCarte"][$i] . "'>";
                echo "<button type='submit' class='trash-button'><i class='fa-regular fa-trash-can'></i></button></form>";
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