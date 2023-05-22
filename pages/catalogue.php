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

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

?>
    <?php $compteur_de_filtres = 0; ?>


<?php
if (!empty($_POST['prix_croissant'])) {
    $compteur_de_filtres = $compteur_de_filtres + 1;
}

if (!empty($_POST['prix_decroissant'])) {
    $compteur_de_filtres = $compteur_de_filtres + 1;
}

if (!empty($_POST['recent'])) {
    $compteur_de_filtres = $compteur_de_filtres + 1;
}

if (!empty($_POST['ancien'])) {
    $compteur_de_filtres = $compteur_de_filtres + 1;
} 

if (empty($_POST['num_page']) or $_POST['num_page'] == 0) {
    $num_page = 0;
} else {
    $num_page = $_POST['num_page'];
}

$start = $num_page * 6;
$count = $num_page * 6 + 6;

if ($compteur_de_filtres == 0) {
    $reponse = $bdd->query("SELECT id, img, prix, nomCarte, description_carte FROM Carte LIMIT $start, $count;");
}

$donnees = $reponse->fetch();


if ($compteur_de_filtres == 1) {
    if (!empty($_POST['prix_croissant'])){
        $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY prix DESC LIMIT $start, $count;");
    }
    if (!empty($_POST['prix_decroissant'])){
        $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY prix ASC LIMIT $start, $count;");
    }
    if (!empty($_POST['recent'])){
        $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY date_ajout ASC LIMIT $start, $count;");
    }
    if (!empty($_POST['ancien'])){
        $reponse = $bdd->query("SELECT id, img, nomCarte, description_carte FROM Carte ORDER BY date_ajout DESC LIMIT $start, $count;");
    }
}


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
                        <img src="../assets/1.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/3.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/1.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/2.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/2.jpg" alt="Carte football">
                    </div>


                    <div class="slide">
                        <img src="../assets/1.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/3.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/1.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/2.jpg" alt="Carte football">
                    </div>
                    <div class="slide">
                        <img src="../assets/2.jpg" alt="Carte football">
                    </div>
                </div>
            </div>
        </section>
    </div>

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
                    
                    
                        <input type="radio" name="filtre" value="prix_croissant" <?php if (!empty($_POST['prix_croissant'])) { ?> checked <?php } ?>>
                    <label for="prix_croissant">Prix Croissant</label><br>

                    <input type="radio" name="filtre" value="prix_decroissant" <?php if (!empty($_POST['prix_decroissant'])) { ?> checked <?php } ?>>
                    <label for="prix_decroissant">Prix Décroissant</label><br>

                    <input type="radio" name="filtre" value="recent" <?php if (!empty($_POST['recent'])) { ?> checked <?php } ?>>
                    <label for="recent">Récent</label><br>

                    <input type="radio" name="filtre" value="ancien" <?php if (!empty($_POST['ancien'])) { ?> checked <?php } ?>>
                    <label for="ancien">Ancien</label><br>

                    <input type="submit" id="appliquer" value="Appliquer" class="filtreSubmit">
                
                </form>
            </div>


            <div class="categorie">
                <h3 id="titre_categories">
                    CATEGORIES
                </h3>
                <ul>
                    <li><input type="button" class="buttonCat" value="Interieur"></li>
                    <div class="barCategorie"></div>
                    <li><input type="button" class="buttonCat" value="Exterieur"></li>
                    <div class="barCategorie"></div>
                    <li><input type="button" class="buttonCat" value="Sensation"></li>
                    <div class="barCategorie"></div>
                    <li><input type="button" class="buttonCat" value="En famille"></li>
                    <div class="barCategorie"></div>
                    <li><input type="button" class="buttonCat" value="Découverte"></li>
                </ul>
            </div>
        </div>
        <div class="catalogue">
            <div id="premiere_ligne">
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

                <?php
                $donnees = $reponse->fetch();
                ?>

                <div class="produit_unitaire">
                    <img src="<?php echo $donnees['img']; ?>" alt="Carte_2">
                    <div class="description">
                        <h3><?php echo $donnees['nomCarte']; ?></h3>
                        <p>
                            <?php
                            echo $donnees['description_carte'];
                            ?>
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <?php
                $donnees = $reponse->fetch();
                ?>
                <div class="produit_unitaire">
                    <img src="<?php echo $donnees['img']; ?>" alt="Carte_3">
                    <div class="description">
                        <h3><?php echo $donnees['nomCarte']; ?></h3>
                        <p>
                            <?php
                            echo $donnees['description_carte'];
                            ?>
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
            </div>
            <?php
            $donnees = $reponse->fetch();
            ?>
            <div id="deuxieme_ligne">
                <div class="produit_unitaire">
                    <img src="<?php echo $donnees['img']; ?>" alt="Carte_4">
                    <div class="description">
                        <h3><?php echo $donnees['nomCarte']; ?></h3>
                        <p>
                            <?php
                            echo $donnees['description_carte'];
                            ?>
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <?php
                $donnees = $reponse->fetch();
                ?>
                <div class="produit_unitaire">
                    <img src="<?php echo $donnees['img']; ?>" alt="Carte_5">
                    <div class="description">
                        <h3><?php echo $donnees['nomCarte']; ?></h3>
                        <p>
                            <?php
                            echo $donnees['description_carte'];
                            ?>
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <?php
                $donnees = $reponse->fetch();
                ?>
                <div class="produit_unitaire">
                    <img src="<?php echo $donnees['img']; ?>" alt="Carte_6">
                    <div class="description">
                        <h3><?php echo $donnees['nomCarte']; ?></h3>
                        <p>
                            <?php
                            echo $donnees['description_carte'];
                            ?>
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
            </div>
            <div id="prev_next">
                <div id="page_precedente">
                    <form method="POST" action="">
                        <button type="submit" name="decrement">
                            <img src="../assets/arrow.svg" alt="Flèche" style="width: 33px;">
                            Précédent
                        </button>
                    </form>
                    <?php
                    if (isset($_POST['increment'])) {
                        $_SESSION['count']++;
                    }
                    ?>
                </div>
                <div id="numero">
                    <?php
                    echo $_SESSION['count'];
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
                    if (isset($_POST['decrement']) && $_SESSION['count'] > 0) {
                        $_SESSION['count']--;
                    } ?>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php') ?>
    <script src="../javascript/menu.js"></script>
    <script src="../javascript/catalogue.js"></script>    

</body>

</html>