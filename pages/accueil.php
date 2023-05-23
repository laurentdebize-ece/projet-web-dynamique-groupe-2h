<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GIFTY - Accueil</title>
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="../stylesheet/accueil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../javascript/acces.js"></script>

</head>
<body>
    <?php include('menu.php');
    include('connexion_base.php');
    $reponse = $bdd->query("SELECT img, nomCarte, description_carte FROM Carte LIMIT 3;");
    $donnees = $reponse->fetch();
    ?>
    <h1>Accueil</h1>
    <h2>Les actus de notre catalogue</h2>
    <div class="actu-container">
        <div class="img-container news">
            <img src="<?php echo $donnees['img']; ?>" alt="Carte_une">
            <div class="img-description">
                <h3><?php echo $donnees['nomCarte']; ?></h3>
                <p>
                    <?php
                    echo $donnees['description_carte'];
                    ?>
                </p>
            </div>
        </div>
        <?php $donnees = $reponse->fetch(); ?>
        <div class="img-container">
            <img src="<?php echo $donnees['img']; ?>" alt="Carte_deux">
            <div class="img-description">
                <h3><?php echo $donnees['nomCarte']; ?></h3>
                <p>
                    <?php
                    echo $donnees['description_carte'];
                    ?>
                </p>
            </div>
        </div>
        <?php $donnees = $reponse->fetch(); ?>
        <div class="img-container news">
            <img src="<?php echo $donnees['img']; ?>" alt="Carte_trois">
            <div class="img-description">
                <h3><?php echo $donnees['nomCarte']; ?></h3>
                <p>
                    <?php
                    echo $donnees['description_carte'];
                    ?>
                </p>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>