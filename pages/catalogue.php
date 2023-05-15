<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>catalogue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="catalogue.css">
    <?php include 'menu.php'; ?>
</head>
<body>



<h1 class="produits_phares">
    NOS PRODUITS PHARES
</h1>

<div class="slider">

</div>


<div id="catalogue" class="container-fluid">
    <div class="filtre_categorie">
        <div class="filtre">
            <h3 id="titre_filtre">
                FILTRES
            </h3>
            <label><input type="checkbox" name="prix_croissant" value="prix_croissant"> Prix croissant</label> <br>
            <label><input type="checkbox" name="prix_decroissant" value="prix_decroissant"> Prix décroissant</label> <br>
            <label><input type="checkbox" name="recent" value="recent"> Récent</label> <br>
            <label><input type="checkbox" name="ancien" value="ancien"> Ancien</label> <br>
            <h4 id="appliquer_filtre">
                Appliquer
            </h4>
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
            </ul>
        </div>
    </div>
    <div id="produits">
        <div id="premiere_ligne">
            <div class="produit_1"></div>
            <div class="produit_2"></div>
            <div class="produit_3"></div>
        </div>
        <div id="deuxieme_ligne">
            <div class="produit_1"></div>
            <div class="produit_2"></div>
            <div class="produit_3"></div>
        </div>
        <div id="prev_next">
            <div id="precedent">
                precédent
            </div>
            <div id="numero"></div>
            <div id="suivant">
                suivant
                <button id="boutton_suivant"><img src="images/arrow.svg" alt="fleche"></a> </button>
            </div>
        </div>
    </div>
</div>

</body>

<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
