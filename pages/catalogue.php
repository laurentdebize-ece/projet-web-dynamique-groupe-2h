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



<?php
if (!empty($_POST['prix_croissant'])) {
}

if (!empty($_POST['prix_decroissant'])) {
} ?>




<h1 class="produits_phares">
    NOS PRODUITS PHARES
</h1>

<div class="carroussel">
    Guillaume c'est ici faut que tu mette ton carrousel
</div>


<div id="catalogue">
    <div class="filtre_categorie">
        <div class="filtre">
            <form method="post" action="catalogue.php" class="form">
                <h3 id="titre_filtre">
                    FILTRES
                </h3>
                <label><input type="checkbox" name="prix_croissant" value="prix_croissant" <?php if (!empty($_POST['prix_croissant'])) { ?> checked <?php } ?>> Prix croissant</label> <br>
                <label><input type="checkbox" name="prix_decroissant" value="prix_decroissant" <?php if (!empty($_POST['prix_decroissant'])) { ?> checked <?php } ?>> Prix décroissant</label> <br>
                <label><input type="checkbox" name="recent" value="recent" <?php if (!empty($_POST['recent'])) { ?> checked <?php } ?>> Récent</label> <br>
                <label><input type="checkbox" name="ancien" value="ancien" <?php if (!empty($_POST['ancien'])) { ?> checked <?php } ?>> Ancien</label> <br>
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
                    <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
                    <button class="bouton_en_savoir_plus">En savoir plus...</button>
                </div>
            </div>
            <div class="produit_unitaire">
                <img src="../assets/2.jpg" alt="Carte football">
                <div class="description">
                    <h3>Offre football</h3>
                    <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
                    <button class="bouton_en_savoir_plus">En savoir plus...</button>
                </div>
            </div>
            <div class="produit_unitaire">
                <img src="../assets/3.jpg" alt="Carte football">
                <div class="description">
                    <h3>Offre football</h3>
                    <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
                    <button class="bouton_en_savoir_plus">En savoir plus...</button>
                </div>
            </div>
        </div>
        <div id="deuxieme_ligne">
            <div class="produit_unitaire">
                <img src="../assets/1.jpg" alt="Carte football">
                <div class="description">
                    <h3>Offre football</h3>
                    <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
                    <button class="bouton_en_savoir_plus">En savoir plus...</button>
                </div>
            </div>
            <div class="produit_unitaire">
                <img src="../assets/2.jpg" alt="Carte football">
                <div class="description">
                    <h3>Offre football</h3>
                    <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
                    <button class="bouton_en_savoir_plus">En savoir plus...</button>
                </div>
            </div>
            <div class="produit_unitaire">
                <img src="../assets/3.jpg" alt="Carte football">
                <div class="description">
                    <h3>Offre football</h3>
                    <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
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
