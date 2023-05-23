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

<?php include('menu.php') ?>
<?php include('connexion_base.php') ?>


<?php
session_start();

$nombre_de_pages = 0;

    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }

?>
<?php $compteur_de_filtres = 0; ?>


<?php
if (empty($_POST['filtre']) || $_POST['filtre'] == "aucun") {
    $compteur_de_filtres = 0;
} else {
    $compteur_de_filtres = 1;
}


$start = $_SESSION['count'] * 6;
$count = $_SESSION['count'] * 6 + 6;



// requete carroussel :

$reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte LIMIT 4;");

$reponse_carroussel = $reponse->fetch();
$img_1 = $reponse_carroussel['img'];
$reponse_carroussel = $reponse->fetch();
$img_2 = $reponse_carroussel['img'];
$reponse_carroussel = $reponse->fetch();
$img_3 = $reponse_carroussel['img'];
$reponse_carroussel = $reponse->fetch();
$img_4 = $reponse_carroussel['img'];


// requete pour compter le nbr de pages necessaires :



?>

<h1 class="produits_phares">
    nos produits phares ...
</h1>

<div class="carroussel">
    <section class="MD">
        <div class="slider">
            <div class="degrade"></div>
            <div class="degrade2"></div>
            <div class="slide-track">
                <div class="slide">
                    <img src="<?php echo $img_1; ?>" alt="Carte1">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_2; ?>" alt="Carte2">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_3; ?>" alt="Carte3">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_4; ?>" alt="Carte4">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_1; ?>" alt="Carte1">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_2; ?>" alt="Carte2">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_3; ?>" alt="Carte3">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_1; ?>" alt="Carte1">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_2; ?>" alt="Carte2">
                </div>
                <?php $reponse_carroussel = $reponse->fetch(); ?>
                <div class="slide">
                    <img src="<?php echo $img_3; ?>" alt="Carte3">
                </div>
            </div>
        </div>
    </section>
</div>

<?php

if(empty($_POST['interieur']) && empty($_POST['exterieur']) && empty($_POST['sensation']) && empty($_POST['famille']) && empty($_POST['decouverte'])) {
    if ($compteur_de_filtres == 0) {
        $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte LIMIT $start, $count;");
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
    } else if ($compteur_de_filtres == 1) {
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
        if (!empty($_POST['filtre'] == "prix_croissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY prix DESC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "prix_decroissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY prix ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "recent")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY date_ajout ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "ancien")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY date_ajout DESC LIMIT $start, $count;");
        }
    }
} else if (!empty($_POST['interieur'])) {
    if ($compteur_de_filtres == 0) {
        $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%interieur%' LIMIT $start, $count;");
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
    } else if ($compteur_de_filtres == 1) {
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
        if (!empty($_POST['filtre'] == "prix_croissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%interieur%' ORDER BY prix DESC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "prix_decroissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%interieur%' ORDER BY prix ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "recent")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%interieur%' ORDER BY date_ajout ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "ancien")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%interieur%' ORDER BY date_ajout DESC LIMIT $start, $count;");
        }
    }
} else if (!empty($_POST['exterieur'])) {
    if ($compteur_de_filtres == 0) {
        $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%exterieur%' LIMIT $start, $count;");
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
    } else if ($compteur_de_filtres == 1) {
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
        if (!empty($_POST['filtre'] == "prix_croissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%exterieur%' ORDER BY prix DESC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "prix_decroissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%exterieur%' ORDER BY prix ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "recent")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%exterieur%' ORDER BY date_ajout ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "ancien")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%exterieur%' ORDER BY date_ajout DESC LIMIT $start, $count;");
        }
    }
} else if (!empty($_POST['sensation'])) {
    if ($compteur_de_filtres == 0) {
        $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%sensation%' LIMIT $start, $count;");
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
    } else if ($compteur_de_filtres == 1) {
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
        if (!empty($_POST['filtre'] == "prix_croissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%sensation%' ORDER BY prix DESC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "prix_decroissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%sensation%' ORDER BY prix ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "recent")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%sensation%' ORDER BY date_ajout ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "ancien")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%sensation%' ORDER BY date_ajout DESC LIMIT $start, $count;");
        }
    }
} else if (!empty($_POST['famille'])) {
    if ($compteur_de_filtres == 0) {
        $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%famille%' LIMIT $start, $count;");
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
    } else if ($compteur_de_filtres == 1) {
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
        if (!empty($_POST['filtre'] == "prix_croissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%famille%' ORDER BY prix DESC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "prix_decroissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%famille%' ORDER BY prix ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "recent")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%famille%' ORDER BY date_ajout ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "ancien")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%famille%' ORDER BY date_ajout DESC LIMIT $start, $count;");
        }
    }
} else if (!empty($_POST['decouverte'])) {
    if ($compteur_de_filtres == 0) {
        $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%decouverte%' LIMIT $start, $count;");
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
    } else if ($compteur_de_filtres == 1) {
        $nbr = $bdd->query("SELECT count(*) FROM Carte;");
        if (!empty($_POST['filtre'] == "prix_croissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%decouverte%' ORDER BY prix DESC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "prix_decroissant")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%decouverte%' ORDER BY prix ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "recent")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%decouverte%' ORDER BY date_ajout ASC LIMIT $start, $count;");
        }
        if (!empty($_POST['filtre'] == "ancien")){
            $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte WHERE mots_clefs LIKE '%decouverte%' ORDER BY date_ajout DESC LIMIT $start, $count;");
        }
    }
}

$donnees = $reponse->fetch();
?>


<h1 class="produits_phares">
    notre catalogue ...
</h1>

<div id="catalogue">
    <div class="filtre_categorie">
        <div class="filtre">
            <form method="post" action="catalogue.php" class="form">
                <h3 id="titre_filtre">
                    FILTRES
                </h3>
                <input type="radio" name="filtre" id="prix_croissant" value="prix_croissant" <?php if (!empty($_POST['filtre']) && $_POST['filtre'] == "prix_croissant"){ ?> checked <?php } ?>>
                <label for="prix_croissant">Prix Croissant</label><br>

                <input type="radio" name="filtre" id="prix_decroissant" value="prix_decroissant" <?php if (!empty($_POST['filtre']) && $_POST['filtre'] == "prix_decroissant"){ ?> checked <?php } ?>>
                <label for="prix_decroissant">Prix Décroissant</label><br>

                <input type="radio" name="filtre" id="recent" value="recent" <?php if (!empty($_POST['filtre']) && $_POST['filtre'] == "recent"){ ?> checked <?php } ?>>
                <label for="recent">Récent</label><br>

                <input type="radio" name="filtre" id="ancien" value="ancien" <?php if (!empty($_POST['filtre']) && $_POST['filtre'] == "ancien"){ ?> checked <?php } ?>>
                <label for="ancien">Ancien</label><br>

                <input type="radio" name="filtre" id="aucun" value="aucun" <?php if (empty($_POST['filtre']) || $_POST['filtre'] == "aucun"){ ?> checked <?php } ?>>
                <label for="aucun">Aucun</label><br>

                <input type="submit" id="appliquer" value="Appliquer" class="filtreSubmit">

            </form>
        </div>


        <div class="categorie">
            <h3 id="titre_categories">
                CATEGORIES
            </h3>
            <ul>
                <li>
                    <form action="" method="post">
                        <input type="submit" class="buttonCat" value="Interieur" name="interieur">
                    </form>
                </li>
                <div class="barCategorie"></div>
                <li>
                    <form action="" method="post">
                        <input type="submit" class="buttonCat" value="Exterieur" name="exterieur">
                    </form>
                </li>
                <div class="barCategorie"></div>
                <li>
                    <form action="" method="post">
                        <input type="submit" class="buttonCat" value="Sensation" name="sensation">
                    </form>
                </li>
                <div class="barCategorie"></div>
                <li>
                    <form action="" method="post">
                        <input type="submit" class="buttonCat" value="En famille" name="famille">
                    </form>
                </li>
                <div class="barCategorie"></div>
                <li>
                    <form action="" method="post">
                        <input type="submit" class="buttonCat" value="Découverte" name="decouverte">
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="catalogue">
        <div id="premiere_ligne">
            <?php if (!empty($donnees)) { ?>
            <div class="produit_unitaire">
                <img src="<?php echo $donnees['img']; ?>" alt="Carte_1">
                <div class="description">
                    <h3><?php echo $donnees['nomCarte']; ?></h3>
                    <p>
                        <?php
                        echo $donnees['description_carte'];
                        ?>
                    </p>
                    <form action="catalogue_en_savoir_plus.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <button class="bouton_en_savoir_plus" type="submit">En savoir plus</button>
                    </form>
                </div>
            </div>
            <?php } ?>
            <?php
            $donnees = $reponse->fetch();
            ?>
            <?php if (!empty($donnees)) { ?>
            <div class="produit_unitaire">

                <img src="<?php echo $donnees['img']; ?>" alt="Carte_2">
                <div class="description">
                    <h3><?php echo $donnees['nomCarte']; ?></h3>
                    <p>
                        <?php
                        echo $donnees['description_carte'];
                        ?>
                    </p>
                    <form action="catalogue_en_savoir_plus.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <button class="bouton_en_savoir_plus" type="submit">En savoir plus</button>
                    </form>
                </div>

            </div>
            <?php } ?>
            <?php
            $donnees = $reponse->fetch();
            ?>
            <?php if (!empty($donnees)) { ?>
            <div class="produit_unitaire">
                <img src="<?php echo $donnees['img']; ?>" alt="Carte_3">
                <div class="description">
                    <h3><?php echo $donnees['nomCarte']; ?></h3>
                    <p>
                        <?php
                        echo $donnees['description_carte'];
                        ?>
                    </p>
                    <form action="catalogue_en_savoir_plus.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <button class="bouton_en_savoir_plus" type="submit">En savoir plus</button>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
        $donnees = $reponse->fetch();
        ?>
        <div id="deuxieme_ligne">
        <?php if (!empty($donnees)) { ?>
            <div class="produit_unitaire">
                <img src="<?php echo $donnees['img']; ?>" alt="Carte_4">
                <div class="description">
                    <h3><?php echo $donnees['nomCarte']; ?></h3>
                    <p>
                        <?php
                        echo $donnees['description_carte'];
                        ?>
                    </p>
                    <form action="catalogue_en_savoir_plus.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <button class="bouton_en_savoir_plus" type="submit">En savoir plus</button>
                    </form>
                </div>
            </div>
            <?php } ?>
            <?php
            $donnees = $reponse->fetch();
            ?>
            <?php if (!empty($donnees)) { ?>
            <div class="produit_unitaire">
                <img src="<?php echo $donnees['img']; ?>" alt="Carte_5">
                <div class="description">
                    <h3><?php echo $donnees['nomCarte']; ?></h3>
                    <p>
                        <?php
                        echo $donnees['description_carte'];
                        ?>
                    </p>
                    <form action="catalogue_en_savoir_plus.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <button class="bouton_en_savoir_plus" type="submit">En savoir plus</button>
                    </form>
                </div>
            </div>
            <?php } 
            $donnees = $reponse->fetch();
            ?>
            <?php if (!empty($donnees)) { ?>
            <div class="produit_unitaire">

                <img src="<?php echo $donnees['img']; ?>" alt="Carte_6">
                <div class="description">
                    <h3><?php echo $donnees['nomCarte']; ?></h3>
                    <p>
                        <?php
                        echo $donnees['description_carte'];
                        ?>
                    </p>
                    <form action="catalogue_en_savoir_plus.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <button class="bouton_en_savoir_plus" type="submit">En savoir plus</button>
                    </form>
                </div>

            </div>
            <?php } ?>
        </div>
        <?php
        while ($nbr > 0) {
            $nbr -= 6;
            $nombre_de_pages++;
        }
        ?>
        <div id="prev_next">
            <div id="page_precedente">
                <form method="POST" action="">
                    <button type="submit" name="decrement">
                        <img src="../assets/arrow.svg" alt="Flèche" style="width: 33px;">
                        Précédent
                    </button>
                </form>
                <?php
                if (isset($_POST['decrement']) && $_SESSION['count'] > 0) {
                    $_SESSION['count']--;
                } ?>

            </div>
            <div id="numero">
                <?php
                echo $_SESSION['count']+1;
                ?>
            </div>
            <div id="page_suivante">
                <form method="POST" action="">
                    <button type="submit" name="increment">
                        <img src="../assets/arrow.svg" alt="Flèche" style="transform: scaleX(-1); width: 33px;">
                        Suivant
                    </button>
                </form>
                <?php
                if (isset($_POST['increment']) && $_SESSION['count'] < $nombre_de_pages) {
                    $_SESSION['count']++;
                }
                ?>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>

</body>

</html>