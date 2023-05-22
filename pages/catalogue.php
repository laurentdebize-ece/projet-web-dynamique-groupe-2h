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
    $reponse = $bdd->query("SELECT img, prix, nomCarte, description_carte FROM Carte LIMIT $start, $count;");
}

$donnees = $reponse->fetch();


if ($compteur_de_filtres == 1) {
    if (!empty($_POST['prix_croissant'])){
        $reponse = $bdd->query("SELECT img, nomCarte, description_carte FROM Carte ORDER BY prix DESC LIMIT $start, $count;");
    }
    if (!empty($_POST['prix_decroissant'])){
        $reponse = $bdd->query("SELECT img, nomCarte, description_carte FROM Carte ORDER BY prix ASC LIMIT $start, $count;");
    }
    if (!empty($_POST['recent'])){
        $reponse = $bdd->query("SELECT img, nomCarte, description_carte FROM Carte ORDER BY date_ajout ASC LIMIT $start, $count;");
    }
    if (!empty($_POST['ancien'])){
        $reponse = $bdd->query("SELECT img, nomCarte, description_carte FROM Carte ORDER BY date_ajout DESC LIMIT $start, $count;");
    }
}


?>

<h1 class="produits_phares">
    nos produits phares
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
        CATALOGUE ...
    </h1>

    <div id="catalogue">
        <div class="filtre_categorie">
            <div class="filtre">
                <form method="post" action="catalogue.php" class="form">
                    <h3 id="titre_filtre">
                        FILTRES
                    </h3>
                    <label><input type="checkbox" name="prix_croissant" value="prix_croissant" <?php if (!empty($_POST['prix_croissant'])) { ?> checked <?php } ?>> Prix croissant</label> <br>
                    <label><input type="checkbox" name="prix_decroissant" value="prix_decroissant" <?php if (!empty($_POST['prix_decroissant'])) { ?> checked <?php } ?>> Prix décroissant</label> <br>
                    <label><input type="checkbox" name="recent" value="recent" <?php if (!empty($_POST['recent'])) { ?>
                                checked <?php } ?>> Récent</label> <br>
                    <label><input type="checkbox" name="ancien" value="ancien" <?php if (!empty($_POST['ancien'])) { ?>
                                checked <?php } ?>> Ancien</label> <br>
                    <h4 id="appliquer_filtre">
                        <input type="submit" id="appliquer" value="Appliquer">
                    </h4>
                </form>
            </div>


            <div class="categorie">
                <h3 id="titre_categories">
                    CATEGORIES
                </h3>
                <ul>
                    <li>Interieur</li>
                    <li>Exterieur</li>
                    <li>Sensation</li>
                    <li>En famille</li>
                    <li>Découverte</li>
                </ul>
            </div>
        </div>
        <div>
            <div id="premiere_ligne">
                <div class="produit_unitaire">
                    <img src="../assets/1.jpg" alt="Carte football">
                    <div class="description">
                        <h3>Offre football</h3>
                        <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <div class="produit_unitaire">
                    <img src="../assets/2.jpg" alt="Carte football">
                    <div class="description">
                        <h3>Offre football</h3>
                        <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <div class="produit_unitaire">
                    <img src="../assets/3.jpg" alt="Carte football">
                    <div class="description">
                        <h3>Offre football</h3>
                        <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
            </div>
            <div id="deuxieme_ligne">
                <div class="produit_unitaire">
                    <img src="../assets/1.jpg" alt="Carte football">
                    <div class="description">
                        <h3>Offre football</h3>
                        <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <div class="produit_unitaire">
                    <img src="../assets/2.jpg" alt="Carte football">
                    <div class="description">
                        <h3>Offre football</h3>
                        <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
                <div class="produit_unitaire">
                    <img src="../assets/3.jpg" alt="Carte football">
                    <div class="description">
                        <h3>Offre football</h3>
                        <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.
                        </p>
                        <button class="bouton_en_savoir_plus">En savoir plus...</button>
                    </div>
                </div>
            </div>
            <div id="prev_next">
                <div id="precedent">
                </div>
                <div id="numero"></div>
                <div id="suivant">
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php') ?>
    <script src="../javascript/menu.js"></script>

</body>

</html>